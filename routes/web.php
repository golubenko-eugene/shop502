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

Route::get('/', 'HomeController@index')->name('home');


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
