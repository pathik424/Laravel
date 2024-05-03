<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Login Register Logout
Route::get('/admin/login',[AuthController::class, 'login']);
Route::post('/admin/login',[AuthController::class, 'Authlogin']);
Route::get('/admin/register',[AuthController::class, 'register']);
Route::post('/admin/register',[AuthController::class, 'store']);
Route::get('logout',[AuthController::class, 'logout']);

// Forgot Password
// Route::get('forgot-password',[AuthController::class, 'forgotpassword']);
// Route::post('forgot-password',[AuthController::class, 'postforgotpassword']);
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');




// Route::get('admin/list', function () {
//     return view('admin.admin.list');
// });

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/dashboard',[DashboardController::class, 'dashboard']);
    Route::get('/admin/list',[AdminController::class, 'list']);
    Route::get('/admin/add',[AdminController::class, 'add']);
    Route::post('/admin/add',[AdminController::class, 'store']);
    Route::get('/admin/edit/{id}',[AdminController::class, 'edit']);
    Route::post('/admin/edit/{id}',[AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}',[AdminController::class, 'delete']);


    //class List
    Route::get('/admin/class/list',[ClassController::class, 'list']);
    Route::get('/admin/class/add',[ClassController::class, 'add']);
    Route::post('/admin/class/add',[ClassController::class, 'store']);
    Route::get('/admin/class/edit/{id}',[ClassController::class, 'edit']);
    Route::post('/admin/class/edit/{id}',[ClassController::class, 'update']);
    Route::delete('/admin/class/delete/{id}',[ClassController::class, 'delete']);

    //subject List
    Route::get('/admin/subject/list',[SubjectController::class, 'list']);
    Route::get('/admin/subject/add',[SubjectController::class, 'add']);
    Route::post('/admin/subject/add',[SubjectController::class, 'store']);
    Route::get('/admin/subject/edit/{id}',[SubjectController::class, 'edit']);
    Route::post('/admin/subject/edit/{id}',[SubjectController::class, 'update']);
    Route::delete('/admin/subject/delete/{id}',[SubjectController::class, 'delete']);

    //assign subject List
    Route::get('/admin/assign/list',[AssignSubjectController::class, 'list']);
    Route::get('/admin/assign/add',[AssignSubjectController::class, 'add']);
    Route::post('/admin/assign/add',[AssignSubjectController::class, 'store']);
    Route::get('/admin/assign/edit/{id}',[AssignSubjectController::class, 'edit']);
    Route::post('/admin/assign/edit/{id}',[AssignSubjectController::class, 'update']);
    Route::delete('/admin/assign/delete/{id}',[AssignSubjectController::class, 'delete']);


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



