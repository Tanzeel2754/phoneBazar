<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

use Session;

class productController extends Controller
{

    function index()
    {
        $data = Product::all();
        $companies = Product::distinct('company')->get('company');
        return view('home', ['products' => $data], ['brands' => $companies]);
    }

    function product($id)
    {
        if (!Session::has('user'))
            return redirect('/login');
        $product = Product::find($id);

        return view("product", ['product' => $product]);
    }


    function addtoCart(Request $req)
    {
        if ($req->session()->has('user')) {

            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;

            $cart->save();

            return redirect('/home');

        } else {
            return (redirect('/login'));
        }
    }
    function removeItem(Request $req)
    {
        if (!Session::has('user'))
            return redirect('/login');
        Cart::destroy(($req->item_id));
        return redirect('cart');

    }


    function buyItem()
    {
        if (!Session::has('user'))
            return redirect('/login');
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cartid')
            ->sum('products.price');

        if ($total == 0) {
            return redirect('home');
        }

        return view('buyNow', ['total' => $total]);
    }
    function buyProduct($id)
    {

        if (!Session::has('user'))
            return redirect('/login');
        $userId = Session::get('user')['id'];
        $price = Product::where("id", $id)->get('price')->first();


        return view('buyNow', ['price' => $price]);
    }

    static function cartItems()
    {
        if (!Session::has('user'))
            return redirect('/login');

        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();

    }

    function viewCart()
    {
        if (!Session::has('user'))
            return redirect('/login');
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cartid')
            ->get();

        return view('cart', ['products' => $products]);
    }
    function orderPlace(Request $req)
    {
        if (!Session::has('user'))
            return redirect('/login');
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cartItem) {
            $order = new Order;
            $order->product_id = $cartItem['product_id'];
            $order->user_id = $cartItem['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();


        }
        Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }


    function search(Request $req)
    {
        if ($req->search == "")
            return redirect("/home");
        $companies = Product::distinct('company')->get('company');
        $data = Product::where("name", 'LIKE', "%{$req->search}%")->get();
        //    $data  = $a->get();
        // return $data;
        if (count($data) == 0) {
            return view('home', ['products' => $data, 'noProducts' => 'none', 'brands' => $companies]);
        } else {
            return view('home', ['products' => $data, 'brands' => $companies]);
            // return view('home',['products'=>$data],['searchName'=>$req->search]);
        }
    }

    function filter(Request $req)
    {
        if (!Session::has('user'))
            return redirect('/login');
        $brand = $req->brand;
        $rom = $req->rom;
        $ram = $req->ram;
        $minPrice = $req->min;
        $maxPrice = $req->max;
        $companies = Product::distinct('company')->get('company');
        $filters = [];

        // $data = Product::all();

        if ($brand != "") {

            $data = Product::where("company", 'LIKE', "%{$brand}%")->get();
            array_push($filters, 'Brand-' . $brand);

        }
        if ($rom != "") {
            $data = Product::where("rom", $rom)->get();
            array_push($filters, 'Storage-' . $rom);

        }

        if ($ram != "") {
            $data = Product::where("ram", $ram)->get();
            array_push($filters, 'Ram-' . $ram);

        }
        if ($minPrice != "" && $maxPrice != "") {
            $data = Product::where("price", '<=', "{$maxPrice}")->where("price", '>=', "{$minPrice}")->orderBy('price', 'asc')->get();
            array_push($filters, 'price-' . $minPrice . "-" . $maxPrice);

        } else if ($minPrice != "") {
            $data = Product::where("price", '>=', "{$minPrice}")->orderBy('price', 'asc')->get();
            array_push($filters, 'price-' . $minPrice . "-INF");

        } else if ($maxPrice != "") {
            $data = Product::where("price", '<=', "{$maxPrice}")->orderBy('price', 'asc')->get();
            array_push($filters, "price-0-" . $maxPrice);

        }


        // return $filters;

        return view('home', ['products' => $data, 'filters' => $filters, 'brands' => $companies]);
    }




    function show($filename)
    {
        // Retrieve the file from the storage directory
        $path = 'images/' . $filename;

        if (Storage::disk('public')->exists($path)) {
            $file = Storage::disk('public')->get($path);

            // Determine the MIME type of the file
            $mimeType = Storage::disk('public')->mimeType($path);

            // Return the file response with appropriate headers
            return response($file, 200)->header('Content-Type', $mimeType);
        }

        abort(404); // If the file doesn't exist, return a 404 response
    }


}