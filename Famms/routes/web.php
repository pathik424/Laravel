<?php

use App\Http\Controllers\Backend\Cart\CartController;
use App\Http\Controllers\Backend\Contact\ContactController;
use App\Http\Controllers\Backend\EyeProduct\ProductCOntroller;
use App\Http\Controllers\Backend\Home\BackendHomeController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Frontend\Home\FrontendHomecontroller;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Api\HookMethods;

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

//Home Page
Route::get("/home",[FrontendHomecontroller::class,'index']);

//Register Page
Route::get("/register",[AuthController::class,'register'])->middleware('guest');
Route::post("/register",[AuthController::class,'store']);

//login Page
Route::get("/login",[AuthController::class,'login'])->middleware('guest');
Route::post("/login",[AuthController::class,'validate_login']);

//logout page
Route::get("/logout",[AuthController::class,'logout']);

//admin page
Route::get("/admin/dashboard",[BackendHomeController::class,'adminview'])->middleware(['auth','admin']);
Route::get("/admin/myuser",[UserController::class,'userview']);
Route::get("/admin/adduser",[UserController::class,'adduser']);
Route::post("/admin/adduser",[UserController::class,'storeuser']);
Route::get("/admin/updateuser/{id}",[UserController::class,'updateuser']);
Route::post("/admin/updateuser/{id}",[UserController::class,'update_changeuserdata']);
Route::delete("/admin/deleteuser/{id}",[UserController::class,'delete_user']);


//Product
Route::get("/admin/eyeproduct",[ProductCOntroller::class,'index']);
Route::get("/admin/add-eyeproduct",[ProductCOntroller::class,'add']);
Route::post("/admin/add-eyeproduct",[ProductCOntroller::class,'store']);
Route::get("/admin/edit-eyeproduct/{id}",[ProductCOntroller::class,'update']);
Route::post("/admin/edit-eyeproduct/{id}",[ProductCOntroller::class,'update_change']);
Route::delete("/admin/delete-eyeproduct/{id}",[ProductCOntroller::class,'destroy']);
Route::get("/admin/logout",[UserController::class,'adminlogout']);



//Cart
Route::get('/shopping-cart', [CartController::class, 'bookCart'])->name('shopping.cart');
Route::get('/book/{id}', [CartController::class, 'addBooktoCart'])->name('addbook.to.cart');
Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');

//contact

Route::get("/contact",[FrontendHomecontroller::class,'contact']);
Route::post("/contact",[FrontendHomecontroller::class,'contactstore']);
Route::get("/admin/contactview",[ContactController::class,'contactview']);
Route::delete("/admin/delete-contact/{id}",[ContactController::class,'destroy']);
// Route::get("/admin/add-eyeproduct",[ProductCOntroller::class,'add']);
// Route::post("/admin/add-eyeproduct",[ProductCOntroller::class,'store']);
// Route::get("/admin/edit-eyeproduct/{id}",[ProductCOntroller::class,'update']);
// Route::post("/admin/edit-eyeproduct/{id}",[ProductCOntroller::class,'update_change']);
// Route::delete("/admin/delete-eyeproduct/{id}",[ProductCOntroller::class,'destroy']);



