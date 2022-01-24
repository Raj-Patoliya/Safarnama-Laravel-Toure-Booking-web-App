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
Route::view('/user-login','user-login');
Route::view('/contact-us','contact-us');
Route::view('/about-us', 'about-us');
Route::view('/admin-add-package','admin-add-package')->name('admin-add-package');
Route::view('/package-page', 'package-page');


Route::resource('/','App\Http\Controllers\UserController');

Route::post('user_login', [UserController::class, 'insertRegister'])->name('insert.register');
Route::post('store-form', [UserController::class, 'store']);
Route::match(['get', 'post'],'profile', [UserController::class, 'login'])->name('user.login.success');
Route::post('create_post', [UserController::class, 'post'])->name('create.post');
Route::get('delete-post/{id}', [UserController::class, 'delete_post'])->name('delete-post');
Route::get('edit-post/{id}', [UserController::class, 'edit_post'])->name('edit-post');
Route::get('user-booking/{id}', [UserController::class, 'user_booking'])->name('user-booking');
Route::match(['get', 'post'],'update-post', [UserController::class, 'update_post'])->name('update-post');
Route::get('user-logout', [UserController::class, 'logout'])->name('user-logout');
Route::get('edit-profile/{id}', [UserController::class, 'edit_profile'])->name('edit-profile');
Route::match(['get', 'post'],'update-profile', [UserController::class, 'update_profile'])->name('update-profile');
Route::match(['get', 'post'],'Blogs-page', [UserController::class, 'blogs_page'])->name('Blogs-page');
Route::match(['get', 'post'],'read-blogs-page/{id}', [UserController::class, 'read_blogs_page'])->name('read-blogs-page');
Route::match(['get', 'post'],'post-comment', [UserController::class, 'post_comment'])->name('post-comment');
Route::match(['get', 'post'],'reply-comment', [UserController::class, 'reply_comment'])->name('reply-comment');
Route::match(['get', 'post'],'store-package', [UserController::class, 'store_package'])->name('store-package');
Route::get('single-package/{id}', [UserController::class, 'single_package'])->name('single-package');
Route::match(['get', 'post'],'package-page', [UserController::class, 'package_page'])->name('package-page');
Route::match(['get', 'post'],'international-package-page', [UserController::class, 'international_package_page'])->name('international-package-page');
Route::match(['get', 'post'],'book-package', [UserController::class, 'book_package'])->name('book-package');


Route::get('apis', function () {
    return view('/');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin-home');
})->name('dashboard');


Route::group(['middleware' => 'disablebackbtn'], function () {

    Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    
        /*Admin*/
        // Route::view('/Admin-login','admin-login');
        Route::get('admin-home', [UserController::class, 'admin_home'])->name('admin-home');
        Route::post('admin-profile', [UserController::class, 'admin_login'])->name('admin-profile');
        Route::get('admin-user-management', [UserController::class, 'admin_user_management'])->name('admin-user-management');
        Route::get('admin-user-blog', [UserController::class, 'admin_user_blog'])->name('admin-user-blog');
        Route::get('admin-booking', [UserController::class, 'admin_booking'])->name('admin-booking');
        Route::get('admin-user-delete/{id}', [UserController::class, 'admin_user_delete'])->name('admin-user-delete');
        Route::get('admin-user-blog-list/{id}', [UserController::class, 'admin_user_blog_list'])->name('admin-user-blog-list');
        Route::get('admin-user-blog-status/{id}', [UserController::class, 'admin_user_blog_status'])->name('admin-user-blog-status');
        Route::get('admin-user-blog-read/{id}', [UserController::class, 'admin_user_blog_read'])->name('admin-user-blog-read');
        Route::get('admin-users-blog-status/{id}', [UserController::class, 'admin_users_blog_status'])->name('admin-users-blog-status');
        Route::match(['get', 'post'],'admin-package-list', [UserController::class, 'admin_package_list'])->name('admin-package-list');
        Route::get('admin-package-status/{id}', [UserController::class, 'admin_package_status'])->name('admin-package-status');
        Route::get('admin-package-delete/{id}', [UserController::class, 'admin_package_delete'])->name('admin-package-delete');
        Route::get('admin-package-edit/{id}', [UserController::class, 'admin_package_edit'])->name('admin-package-edit');
        Route::get('admin-package-view/{id}', [UserController::class, 'admin_package_view'])->name('admin-package-view');
        Route::match(['get', 'post'],'update-package', [UserController::class, 'update_package'])->name('update-package');
    });
});