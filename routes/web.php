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
Route::view('/', 'home');
Route::view('/Blog','single-blog');
Route::view('/register','user-register');
Route::view('/user-login','user-login');
Route::view('/user-login', 'user-login');
Route::view('/contact-us','contact-us');
Route::view('/about-us', 'about-us');
Route::view('/user-edit-post', 'user-edit-post');


Route::resource('/','App\Http\Controllers\UserController');

Route::post('user_login', [UserController::class, 'insertRegister'])->name('insert.register');
Route::post('store-form', [UserController::class, 'store']);
Route::match(['get', 'post'],'profile', [UserController::class, 'login'])->name('user.login.success');
Route::post('create_post', [UserController::class, 'post'])->name('create.post');
Route::get('delete-post/{id}', [UserController::class, 'delete_post'])->name('delete-post');
Route::get('eid-post/{id}', [UserController::class, 'edit_post'])->name('edit-post');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


/*Admin*/
Route::view('/Admin-login','admin-login');
Route::get('admin-home', [UserController::class, 'admin_home'])->name('admin-home');
Route::post('admin-profile', [UserController::class, 'admin_login'])->name('admin-profile');
Route::get('admin-user-management', [UserController::class, 'admin_user_management'])->name('admin-user-management');
Route::get('admin-user-blog', [UserController::class, 'admin_user_blog'])->name('admin-user-blog');
Route::get('admin-user-delete/{id}', [UserController::class, 'admin_user_delete'])->name('admin-user-delete');
Route::get('admin-user-blog-list/{id}', [UserController::class, 'admin_user_blog_list'])->name('admin-user-blog-list');
Route::get('admin-user-blog-status/{id}', [UserController::class, 'admin_user_blog_status'])->name('admin-user-blog-status');
Route::get('admin-user-blog-read/{id}', [UserController::class, 'admin_user_blog_read'])->name('admin-user-blog-read');
Route::get('admin-users-blog-status/{id}', [UserController::class, 'admin_users_blog_status'])->name('admin-users-blog-status');
Route::get('apis', function () {
    return view('/');
});