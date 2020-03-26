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
Route::get('/', 'HomeController@main');
Route::get('/product/{slug}', 'HomeController@product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cart/add', 'CartController@add');
Route::post('/cart/clear', 'CartController@clear');
Route::post('/cart/remove', 'CartController@remove');
Route::post('/cart/change-qty', 'CartController@changeQty');

Route::get('/checkout', 'OrderController@checkout');

//группы
Route::group([
		'prefix'=>'admin',		//страница, начало юрл адреса
		'namespace'=>'Admin',	//место где лежит контроллер
		'middleware'=>['auth', 'admin']	//посредник
	], function(){
	Route::get('/', 'AdminController@index');
	Route::resource('/categories', 'CategoryController');
	Route::resource('/products', 'ProductController');
	Route::get('/page', 'AdminController@page');
});
