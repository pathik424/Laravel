<?php

use App\Http\Controllers\ajax\EmployeeController;
use App\Http\Controllers\api\ApiRegistrationController;
use App\Http\Controllers\aproduct;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\Backend\aproduct\aproductcontroller;
use App\Http\Controllers\Backend\Brand\brandconroller;
use App\Http\Controllers\Backend\Category\Categorycontroller;
use App\Http\Controllers\Backend\Home\BackendHomeController;
use App\Http\Controllers\Backend\Home\homecontroller as HomeHomecontroller;
use App\Http\Controllers\Backend\pathik\cartcontroller;
use App\Http\Controllers\Backend\pathik\pathikcontroller;
use App\Http\Controllers\Backend\Product\Productcontroller;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\query\QueryController;
use App\Http\Controllers\Resource\ResourceController;
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

//Register
Route::get("/register",[authcontroller::class,'index'])->middleware('guest'); // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post("/register",[authcontroller::class,'store']);

//Login
Route::get("/login",[authcontroller::class,'login'])->middleware('guest');  // middlwear guest thi e thase jyare e login karse tyare e pacho login page ma nai jai sake url change karine
Route::post("/login",[authcontroller::class,'validate_login']);

//logout
Route::get("/logout",[authcontroller::class,'logout']);



//admin

// anu group niche karyu che a example mate rakhyu che

// Route::get("/admin/dashboard",[HomeHomecontroller::class,'index']);
// Route::get("/admin/category",[Categorycontroller::class,'index']);
// Route::get("/admin/add-category",[Categorycontroller::class,'add']);
// Route::post("/admin/add-category",[Categorycontroller::class,'store']);

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get("/dashboard",[BackendHomeController::class,'adminview']);
    Route::get("/category",[Categorycontroller::class,'index']);
    Route::get("/add-category",[Categorycontroller::class,'add']);
    Route::post("/add-category",[Categorycontroller::class,'store']);
    Route::get("/edit-category/{id}",[Categorycontroller::class,'update']);
    Route::put("/edit-category/{id}",[Categorycontroller::class,'update_change']);
    Route::delete("/delete-category/{id}",[Categorycontroller::class,'destroy']);

    Route::get("/brand",[brandconroller::class,'index']);
    Route::get("/add-brand",[brandconroller::class,'add']);
    Route::post("/add-brand",[brandconroller::class,'store']);
    Route::get("/edit-brand/{id}",[brandconroller::class,'update']);
    Route::post("/edit-brand/{id}",[brandconroller::class,'update_change']);
    Route::delete("/delete-brand/{id}",[brandconroller::class,'destroy']);


    Route::get("/product",[Productcontroller::class,'index']);
    Route::get("/add-product",[Productcontroller::class,'add']);
    Route::post("/add-product",[Productcontroller::class,'store']);

    // Product Show in Home Page

    Route::get("/pathik",[pathikcontroller::class,'index']);
    Route::get("/add-pathik",[pathikcontroller::class,'add']);
    Route::post("/add-pathik",[pathikcontroller::class,'store']);
    Route::get("/edit-pathik/{id}",[pathikcontroller::class,'update']);
    Route::post("/edit-pathik/{id}",[pathikcontroller::class,'update_change']);
    Route::delete("/delete-pathik/{id}",[pathikcontroller::class,'destroy']);

});

    // add to cart product

Route::get('cartproducts', [HomeController::class, 'index']);
Route::get('cart', [cartcontroller::class, 'cartList']);
Route::post('cart', [CartController::class, 'addToCart']);
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart']);
Route::post('clear', [CartController::class, 'clearAllCart']);

// API

// Route::get('admin/registration',[ApiRegistrationController::class,'index']);
// Route::get('/registration',[ApiRegistrationController::class,'index']);
Route::view('/registration','api.Registration');





// AJax Colling

// Route::get('/', function () {
//     return view('employee');
// });
// Route::post('employee-add', [EmployeeController::class, 'employee_add']);
// Route::get('employee-view', [EmployeeController::class, 'employee_view']);
// Route::get('employee-delete', [EmployeeController::class, 'employee_delete']);
// Route::post('employee-edit', [EmployeeController::class, 'employee_edit']);
// Route::get('employee-list', [EmployeeController::class, 'employee_list']);


// Query Builder

Route::get('/myuser', [QueryController::class, 'showUser'])->name("my.user");
Route::get('/user/{id}', [QueryController::class, 'singleuser'])->name("view.user");


Route::get('/adduser', [QueryController::class,'addUser'])->name("add.user");
Route::post('/adduser', [QueryController::class,'insertuser']);

Route::get('/updateuser/{id}', [QueryController::class,'updateUser'])->name("update.user");
Route::post('/updateuser/{id}', [QueryController::class,'updatepage']);

Route::delete('/deleteuser/{id}', [QueryController::class,'deleteuser'])->name("delete.user");