<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/login',[AuthController::class, 'login']);
Route::post('/admin/login',[AuthController::class, 'Authlogin']);
