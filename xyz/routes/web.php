<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\register;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\YourNameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/register",[registercontroller::class,"index"]);
Route::get("/users",[YourNameController::class,"index"]);
Route::get("/adduser",[YourNameController::class,"add"]);
Route::post("/adduser",[YourNameController::class,"store"]);
Route::post("/register",[registercontroller::class,"register"]);


// Product

// Route::get("/dashboard",[HomeHomecontroller::class,'index']);
// Route::get("/product",[ProductController::class,'index']);
// Route::get("/add-product",[ProductController::class,'add']);
// Route::post("/add-product",[ProductController::class,'store']);
// Route::get("/edit-product/{id}",[ProductController::class,'update']);
// Route::put("/edit-product/{id}",[ProductController::class,'update_change']);
// Route::delete("/delete-product/{id}",[ProductController::class,'destroy']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("/admin/dashboard",[::class,'index']);



Route::get('/dashboard', [ProductController::class, 'index']);
Route::get('/shopping-cart', [ProductController::class, 'productCart'])->name('shopping.cart');
Route::get('/product/{id}', [ProductController::class, 'addProducttoCart'])->name('addProduct.to.cart');
Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');
