<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Brand\BrandController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
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


Route::get("/home",[HomeController::class,'index']);

//Register & Login
Route::get("/Register",[AuthController::class,'index'])->middleware('guest');
Route::post("/Register",[AuthController::class,'store']);
Route::get("/Login",[AuthController::class,'login'])->middleware('guest');
Route::post("/Login",[AuthController::class,'login_validation']);
Route::get("/logout",[AuthController::class,'logout']);

// Admin
Route::get("/admin/dashboard",[AdminController::class,'index']);
Route::get("/admin/users",[AdminController::class,'user']);
Route::get("/admin/add-users",[AdminController::class,'add_user']);
Route::post("/admin/add-users",[AdminController::class,'store_user']);
Route::get("/admin/edit-users/{id}",[AdminController::class,'update_user']);
Route::post("/admin/edit-users/{id}",[AdminController::class,'update_userchange']);
Route::delete("/admin/delete-users/{id}",[AdminController::class,'delete_user']);

//Product Controller

//Category
Route::get("/admin/category",[CategoryController::class,'index']);
Route::get("/admin/add-category",[CategoryController::class,'add']);
Route::post("/admin/add-category",[CategoryController::class,'store']);
Route::get("/admin/edit-category/{id}",[CategoryController::class,'update']);
Route::post("/admin/edit-category/{id}",[CategoryController::class,'update_change']);
Route::delete("/admin/delete-category/{id}",[CategoryController::class,'destroy']);

// Brand
Route::get("/admin/brand",[BrandController::class,'index']);
// Route::get("/admin/add-brand",[BrandController::class,'add']);
// Route::post("/admin/add-brand",[BrandController::class,'store']);
// Route::get("/admin/edit-brand/{id}",[BrandController::class,'update']);
// Route::post("/admin/edit-brand/{id}",[BrandController::class,'update_change']);
// Route::delete("/admin/delete-brand{id}",[BrandController::class,'destroy']);

// //Product
// Route::get("/admin/product",[CategoryController::class,'index']);
// Route::get("/admin/add-product",[CategoryController::class,'add']);
// Route::post("/admin/add-product",[CategoryController::class,'store']);
// Route::get("/admin/edit-product/{id}",[CategoryController::class,'update']);
// Route::post("/admin/edit-product/{id}",[CategoryController::class,'update_change']);
// Route::delete("/admin/delete-product{id}",[CategoryController::class,'destroy']);





