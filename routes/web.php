<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;


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
//     return view('products');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ProductsController::class, 'product'])->name('products');
Route::get('/products/outdoor', [App\Http\Controllers\ProductsController::class, 'print_outdoor'])->name('outdoor');
Route::get('/products/indoor', [App\Http\Controllers\ProductsController::class, 'print_indoor'])->name('indoor');
Route::get('/products/carpets', [App\Http\Controllers\ProductsController::class, 'carpets'])->name('carpets'); 
Route::get('/products/beddings', [App\Http\Controllers\ProductsController::class, 'beddings'])->name('beddings'); 


Route::get('/register', [UserController::class,'userreg'])->name('register');
Route::post('/register', [UserController::class,'signup'])->name('register');


Route::get('/login', [UserController::class,'userlogin'])->name('userlogin');
Route::post('/login', [UserController::class,'login'])->name('userlogin');


//admin controller
Route::get('/adminlogin', [AdminController::class,'adminlogin'])->name('adminlogin');
Route::post('/adminlogin', [AdminController::class,'postadminlogin'])->name('adminlogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('adminlogout');


//admin product controller
Route::get('/admin/dash', [AdminProductController::class, 'admindash'])->name('admindash');
Route::get('/admin/addproducts', [AdminProductController::class, 'addproducts'])->name('addproducts');
Route::post('/admin/addproducts', [AdminProductController::class, 'addproducts_post'])->name('addproducts');
// Route::get('/admin/product', [AdminProductController::class, 'product'])->name('product');
Route::get('/admin/product', [AdminProductController::class, 'print'])->name('product');
Route::get('/admin/deleteproduct/{id}',[AdminProductController::class,'delete'])->name('delete');
Route::get('/admin/adminusers',[AdminProductController::class,'userprint'])->name('userprint');


//user 

Route::get('/userhome', [App\Http\Controllers\UserController::class, 'userhome'])->name('userhome');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');






