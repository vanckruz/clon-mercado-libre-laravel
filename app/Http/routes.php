<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);

Route::get('/social', ['uses' => 'IndexController@login_register', 'as' => 'login']);
Route::post('/social/signin', ['uses' => 'IndexController@signin', 'as' => 'val_login']);
Route::post('/social/signup', ['uses' => 'IndexController@signup', 'as' => 'val_register']);
Route::get('/social/salir', ['uses' => 'IndexController@logout', 'as' => 'logout']);

Route::get('/descubre', ['uses' => 'IndexController@list_last', 'as' => 'list']);
Route::get('/search/{search?}', ['uses' => 'IndexController@search', 'as' => 'search']);

Route::get('/menu/{id}', ['uses' => 'IndexController@menu', 'as' => 'menu']);
Route::get('/carrito', ['uses' => 'IndexController@carrito', 'as' => 'carrito']);
Route::post('/add_cart', ['uses' => 'IndexController@add_cart', 'as' => 'add_cart']);
Route::post('/pedir', ['uses' => 'IndexController@pedir', 'as' => 'pedir']);


Route::get('/admin/login', ['uses' => 'IndexController@admin_login', 'as' => 'admin_login']);
Route::post('/admin/login/signin', ['uses' => 'IndexController@admin_login', 'as' => 'admin_login']);
Route::get('/admin/panel', ['uses' => 'IndexController@admin', 'as' => 'admin']);


