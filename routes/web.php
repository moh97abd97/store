<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@Admin')->name('admin.home')->middleware('admin');

Route::get('/admin/login', 'admin\auth\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'admin\auth\AdminLoginController@login')->name('admin.login');

Route::middleware('admin')->group(function () {
    Route::resource('admin/user', 'UserController');
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/product', 'ProductController');
});