<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'product'])->name('products');


Route::get('/register', [UserController::class,'userreg'])->name('register');
Route::post('/register', [UserController::class,'signup'])->name('register');


Route::get('/login', [UserController::class,'userlogin'])->name('userlogin');
Route::post('/login', [UserController::class,'login'])->name('userlogin');
// Route::post('/logout', [UserController::class,'logout'])->name('login');
Route::get('/adminlogin', [AdminController::class,'adminlogin'])->name('adminlogin');
Route::post('/adminlogin', [AdminController::class,'postadminlogin'])->name('adminlogin');
Route::get('/admin/dash', [App\Http\Controllers\AdminController::class, 'admindash'])->name('admindash');

//user 
Route::get('/userhome', [App\Http\Controllers\UserController::class, 'userhome'])->name('userhome');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');






