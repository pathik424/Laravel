<?php

use App\Http\Controllers\api\ApiRegistration;
use App\Http\Controllers\api\ApiRegistrationController;
use App\Http\Controllers\Backend\Home\homecontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// API

// Route::any('/getuserdata',[homecontroller::class,'GetUsersData']);
// Route::post('/getuserdata',[homecontroller::class,'GetUsersData']);
// Route::any('/users',[homecontroller::class,'index']);


// Route::any('/registration',[ApiRegistrationController::class,'index']);
Route::post('/registration',[ApiRegistrationController::class,'store']);
Route::get('/updatereg/{id}',[ApiRegistrationController::class,'update']);
Route::get('/deletereg/{id}',[ApiRegistrationController::class,'delete']);
// Route::get('/regapi',[ApiRegistrationController::class,'apidata']);
Route::any('/regapi',[ApiRegistrationController::class,'apidata']);
