<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\backend\home\bhommecontroller;
use App\Http\Controllers\backend\post\postcontroller;
use App\Http\Controllers\frontend\home\homecontroller;
use App\Http\Controllers\productcontroller;
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

Route::get("/home",[homecontroller::class,'index']);

Route::get("/register",[authcontroller::class,'index']);
Route::get("/login",[authcontroller::class,'index1']);
Route::post("/register",[authcontroller::class,'store']);
Route::post("/login",[authcontroller::class,'validate_login']);
Route::get("/logout",[authcontroller::class,'logout']);

Route::get("/admin/dashboard",[bhommecontroller::class,'index']);
Route::get("/admin/post",[postcontroller::class,'postview']);
Route::get("/admin/add-post",[postcontroller::class,'postform']);
Route::post("/admin/add-post",[postcontroller::class,'postform_save']);
Route::get("/admin/update-post/{id}",[postcontroller::class,'postupdate']);
Route::post("/admin/update-post/{id}",[postcontroller::class,'postupdate_change']);
Route::delete("/admin/delete-post/{id}",[postcontroller::class,'destroy']);


Route::get("/singleblog/{id}",[postcontroller::class,'singleblog'])->name('full.post');
// Product


Route::get("/product",[productcontroller::class,'index']);
Route::get("/add-product",[productcontroller::class,'add']);
Route::post("/add-product",[productcontroller::class,'store']);

