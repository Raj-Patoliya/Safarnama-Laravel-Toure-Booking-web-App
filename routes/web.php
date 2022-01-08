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
/*User's View*/
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
// Route::get('/user-profile', function () {
//     return view('user-profile');
// });
Route::resource('/','App\Http\Controllers\UserController');
Route::view('/about-us', 'about-us');
Route::post('user_login', [UserController::class, 'insertRegister'])->name('insert.register');
Route::post('store-form', [UserController::class, 'store']);
Route::post('profile', [UserController::class, 'login'])->name('user.login.success');
Route::post('create_post', [UserController::class, 'post'])->name('create.post');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

/*Admin*/
Route::get('/Admin-login', function () {
    return view('admin-login');
});
Route::get('admin-home', [UserController::class, 'admin_home'])->name('admin-home');
Route::post('admin-profile', [UserController::class, 'admin_login'])->name('admin-profile');
Route::get('admin-user-management', [UserController::class, 'admin_user_management'])->name('admin-user-management');
Route::get('admin-user-blog', [UserController::class, 'admin_user_blog'])->name('admin-user-blog');
Route::get('admin-user-delete/{id}', [UserController::class, 'admin_user_delete'])->name('admin-user-delete');
Route::get('admin-user-blog-list/{id}', [UserController::class, 'admin_user_blog_list'])->name('admin-user-blog-list');
Route::get('admin-user-blog-status/{id}', [UserController::class, 'admin_user_blog_status'])->name('admin-user-blog-status');
Route::get('admin-user-blog-read/{id}', [UserController::class, 'admin_user_blog_read'])->name('admin-user-blog-read');
