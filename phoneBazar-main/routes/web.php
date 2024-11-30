<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/errorlogin', function () {
    return view('errorlogin');
});

Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('admin');
    return redirect('/');
});

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/sellerHome', function () {
//     return view('sellerHome');
// });

Route::post("/login",[UserController::class,"login"]);
Route::post("/signup",[UserController::class,"signup"]);

Route::get("/home",[productController::class,'index']);

Route::get("/product/{id}",[productController::class,'product']);
Route::get("/cart",[productController::class,'viewCart']);


Route::get("/search",[productController::class,'search']);
Route::get("/filters",[productController::class,'filter']);
Route::post("/add_to_cart",[productController::class,'addtoCart']);
Route::post("/removeItem",[productController::class,'removeItem']);
Route::post("/buyItem",[productController::class,'buyItem']);
Route::get("/buyproduct/{id}",[productController::class,'buyProduct']);
Route::post("/orderplace",[productController::class,'orderPlace']);
Route::get("/myorders",[productController::class,'myOrder']);

Route::get("/myform",[productController::class,'search']);


Route::get("/adminhome",[adminController::class,'index']);
Route::get("/users",[adminController::class,'viewCustomers']);
Route::get("/addProduct",[adminController::class,'addProduct']);
Route::post("/addProduct",[adminController::class,'add']);
Route::get("/editproduct/{id}",[adminController::class,'edit']);
Route::get("/deleteproduct/{id}",[adminController::class,'delete']);
Route::post("/updateProduct",[adminController::class,'update']);

Route::get("/deleteUser/{id}",[adminController::class,'deleteUser']);

Route::get('/images/{filename}', [productController::class,'show'])->name('image.show');