<?php

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
Route::prefix('admins')->group(function () {
    Route::middleware('auth.logged')->get('login', 'Admin\AuthController@index')->name('adminLogin');
    Route::post('index', 'Admin\AuthController@login')->name('loginProcess');
    Route::get('logout', 'Admin\AuthController@logout')->name('adminLogout');
    Route::middleware('auth.admin')->group(function (){
        Route::get('/', 'Admin\HomeController@index')->name('indexAdmin');
        Route::resource('category', 'Admin\CategoryController');
        Route::resource('product', 'Admin\ProductController');
        Route::resource('user', 'Admin\UserController');
        Route::get('category/delete/{id}', 'Admin\CategoryController@destroy')->name('categoryDestroy');
        Route::get('product/delete/{id}', 'Admin\CategoryController@destroy')->name('productDestroy');
        Route::get('user/delete/{id}', 'Admin\CategoryController@destroy')->name('userDestroy'); 
    });
});
Route::prefix('/')->group(function () {
    Route::get('/','User\HomeController@index')->name('index');
    Route::get('introduce','User\HomeController@introduce')->name('introduce');
    Route::get('product','User\HomeController@product')->name('product');
    Route::get('news','User\HomeController@news')->name('news');
    Route::get('contact','User\HomeController@contact')->name('contact');
});
