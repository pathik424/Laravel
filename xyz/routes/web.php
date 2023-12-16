<?php

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
