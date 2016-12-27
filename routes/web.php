<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'cms\PagesController@home');

Auth::routes();

Route::get('/dashboard', 'cms\DashboardController@dashboard');
Route::post('/loginaction', 'Auth\LoginController@login');
Route::get('/logOut', 'Auth\LoginController@logout');
Route::get('/user', 'cms\UserController@user');
Route::get('/product-list', 'cms\ProductController@product');
Route::get('/history', 'cms\HistoryController@getHistory');
Route::get('/testimonals', 'cms\TestimonalController@getTestimonalDetail');
Route::get('/category', 'cms\CategoryController@getCategoryList');
Route::post('/add_category', 'cms\CategoryController@add');
Route::get('/delete-category', 'cms\CategoryController@delete');
Route::get('/edit-category', 'cms\CategoryController@edit');
Route::post('/edit-single-category', 'cms\CategoryController@editCategory');
Route::post('/edit-single-product', 'cms\CategoryController@editProduct');
Route::post('/add-product', 'cms\ProductController@add');
Route::get('/delete-product', 'cms\ProductController@delete');
Route::get('/edit-product', 'cms\ProductController@edit');
Route::get('/about', 'cms\PagesController@about');
Route::get('/features', 'cms\PagesController@features');
Route::get('/faqs', 'cms\PagesController@faqs');
Route::get('/product-category', 'cms\PagesController@productCategory');
Route::get('/order', 'cms\PagesController@order');
Route::get('/order-detail', 'cms\OrderController@getOrders');
Route::post('/add-to-cart', 'cms\PagesController@addToCart');


Route::get('/clients', 'cms\UserController@client');
Route::post('/postRegister', 'FrontAuth\FrontAuthloginController@postRegister');
Route::post('/postLogin', 'FrontAuth\FrontAuthloginController@postLogin');
Route::get('/logout', 'FrontAuth\FrontAuthloginController@postLogout');
Route::get('/clientDelete', 'FrontAuth\FrontAuthloginController@clientDelete');



