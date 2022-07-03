<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",function() {
    return view('home');
})->name('home');

//User Router
Route::get("/login",[UserController::class,'showLogin'])->name('user.showLogin');
Route::get("/logout",[UserController::class,'logout'])->name('user.logout');
Route::get("/signup",[UserController::class,'showSignup'])->name('user.showSignup');
Route::get("/success",[UserController::class,'success'])->name('user.success');
Route::post("/login",[UserController::class,'login'])->name('user.login');
Route::post('/register',[UserController::class,'signup'])->name('user.register');








