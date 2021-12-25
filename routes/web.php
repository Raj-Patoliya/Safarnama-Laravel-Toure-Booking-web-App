<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Facade\FlareClient\View;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/Blog', function () {
    return view('single-blog');
});
Route::get('/register', function () {
    return view('user-register');
});
Route::get('/user-login', function () {
    return view('user-login');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/user-profile', function () {
    return view('user-profile');
});
Route::resource('/','App\Http\Controllers\UserController');
Route::view('/about-us', 'about-us');
Route::post('user_login', [UserController::class, 'insertRegister'])->name('insert.register');
Route::post('store-form', [UserController::class, 'store']);
Route::post('user_auth', [UserController::class, 'login'])->name('user.login.success');
Route::post('create_post', [UserController::class, 'post'])->name('create.post');
Route::get('logout', [UserController::class, 'logout'])->name('logout');