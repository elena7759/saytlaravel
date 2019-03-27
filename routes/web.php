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

Route::get('/','BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('home', 'HomeController@postindex');

Route::get('populars','StaticController@getPopulars');
//defoult
Route::get('{url}', 'StaticController@getIndex');