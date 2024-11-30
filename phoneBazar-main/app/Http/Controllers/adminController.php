<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Session;

class adminController extends Controller
{
    
    function index(){
        if(Session::has('admin')){
            $data = Product::all();
            return view('adminhome',['products'=>$data,'page'=>"Products"]);
        }
        return redirect('/login');
    }

    function addProduct(){
        if(Session::has('admin')){
            
            return view('/addproducts',['page'=>"Add Product"]);
        }
        return redirect('/login');
    }
    function add(Request $req){
        $product = new Product;

        $product->name = $req->name;
        $product->company = $req->company;
        $product->rom = $req->rom;
        $product->ram = $req->ram;
        $product->description = $req->description;
        $product->price = $req->price;
        


        $validator = Validator::make($req->all(), [
            'image' => 'required|image',
        ]);

   
        $image = $req->file('gallery');

    
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        
        Storage::disk('public')->putFileAs('images', $image, $filename);
        $product->gallery = $filename;
        $product->save();
        return redirect('adminhome');
    }


    function delete($id){
        if (!Session::has("admin")) {
            return redirect('/login');
        }

        Product::find($id)->delete();
        Cart::where('product_id',$id)->delete();
        // Order::find($id)->delete();
        return redirect('/adminhome');

    }

    function edit($id){
        if (!Session::has("admin")) {
            return redirect('/login');
        }
        $product = Product::where('id',$id)->first();
        
        // return $product;
        return view('editproduct',['product'=>$product, 'page'=>'Edit Product']);

    }

    function update(Request $req){
        if (!Session::has("admin")) {
            return redirect('/login');
        }

        $product = Product::where('id',$req->id)->first();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->company = $req->company;

        $product->save();

        return redirect('/adminhome');
    }

    function viewCustomers(){
        if (!Session::has("admin")) {
            return redirect('/login');
        }
        $users = User::all();
        return view('/users',['users'=>$users,'page'=>'Customers']);

    }


    function deleteUser($id){
        if (!Session::has("admin")) {
            return redirect('/login');
        }

        User::find($id)->delete();
        Cart::where('user_id',$id)->delete();
        // Order::find($id)->delete();
        return redirect('/adminhome');
    }

}
