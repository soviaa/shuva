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


Route::get('/register', [UserController::class,'userreg'])->name('register');
Route::post('/register', [UserController::class,'signup'])->name('register');


//ALL ADMIN
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    //admin dash view
    Route::get('/dash', function () {
        return view('Admin.adminnav');
    })->name('admindash');
    
});
// admin login
Route::get('/login', [UserController::class,'userlogin'])->name('userlogin');
Route::post('/login', [UserController::class,'login'])->name('userlogin');
Route::post('/logout', [UserController::class,'logout'])->name('userlogin');




