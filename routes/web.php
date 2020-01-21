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

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Panel Routing
Route::group(['prefix' => '/admin'],function(){
    Route::get('/dashboard', 'admin\AllpageController@dashboard')->name('admin.dashboard');
    Route::resource('/register', 'admin\adminUserController');
    Route::get('/login', 'admin\adminUserController@show_login_form');
    Route::post('/login', 'admin\adminUserController@login');
});

// Product Brand Routing
Route::group(['prefix' => '/admin'],function(){
    Route::resource('/product-brands', 'admin\brandController');
    Route::resource('/product-categories', 'admin\categoryController');
    Route::resource('/product-tags', 'admin\tagContoller');
    Route::resource('/products', 'admin\productController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
