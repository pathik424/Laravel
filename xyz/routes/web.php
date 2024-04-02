<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/login',[AuthController::class, 'login']);
Route::post('/admin/login',[AuthController::class, 'Authlogin']);

Route::get('/admin/register',[AuthController::class, 'register']);
Route::post('/admin/register',[AuthController::class, 'store']);
Route::get('logout',[AuthController::class, 'logout']);

Route::get('admin/list', function () {
    return view('admin.admin.list');
});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/dashboard',[DashboardController::class, 'dashboard']);

});


Route::group(['middleware' => 'teacher'], function () {

    Route::get('/teacher/dashboard',[DashboardController::class, 'dashboard']);

});


Route::group(['middleware' => 'student'], function () {

    Route::get('/student/dashboard',[DashboardController::class, 'dashboard']);

});


Route::group(['middleware' => 'parent'], function () {

    Route::get('/parent/dashboard',[DashboardController::class, 'dashboard']);

    });



