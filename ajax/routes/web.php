<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\User\usercontroller;
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

Route::get('/user/create',[usercontroller::class, 'create']);
Route::post('/user/store',[usercontroller::class, 'store'])->name('user.store');
Route::get('/user/list',[usercontroller::class, 'index'])->name('user.list');






// AJax Calling 2nd method

Route::get('/add-product',function(){
    return view('Product.form');
});
Route::post('/add-product',[ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/get-product',function(){
    return view('Product.list');
});
Route::get('/get-all-product',[ProductController::class, 'getProducts'])->name('getProducts');

Route::get('editproduct/{id}',[ProductController::class, 'getProductsdata']);

Route::post('updateproduct',[ProductController::class, 'updateproduct'])->name('updateproduct');

Route::get('delete-data/{id}',[ProductController::class, 'deletedata']);







// Ajax Calling 3rd method


Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('fetch-students', [StudentController::class, 'fetchstudent']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);



