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
Route::get('/descubre', ['uses' => 'IndexController@list_last', 'as' => 'list']);
Route::get('/search/{search}', ['uses' => 'IndexController@search', 'as' => 'search']);
Route::get('/menu/{id}', ['uses' => 'IndexController@menu', 'as' => 'menu']);
Route::get('/carrito', ['uses' => 'IndexController@carrito', 'as' => 'carrito']);
Route::get('/admin', ['uses' => 'IndexController@admin', 'as' => 'admin']);


