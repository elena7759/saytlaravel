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
Route::get('user/{id}', 'ChatController@getUser');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => ['lang']], function () {
    Route::get('/', 'BaseController@getIndex');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/dell/{id}', 'HomeController@getDelete');

Route::post('home', 'HomeController@postindex');

Route::get('populars', 'StaticController@getPopulars');

Route::get('products', 'ProductController@getindex');

Route::get('product/{id}', 'ProductController@getOne');

Route::get('works', 'WorkController@getAll');



//ajax

Route::post('ajax/modal', 'Ajax\ModalController@postIndex');

Route::get('cookie_clear','SettingsController@cookieClear');

Route::get('catalogs', 'CatalogController@getAll');

Route::get('catalog/{id}', 'CatalogController@getone');

Route::resources([
    'user'=>'UserController',
    'user2'=>'User2Controller'
]);



//test
Route::get('test/index','TestController@getIndex');
Route::get('test/{id}','TestController@getShow');





//defoult
Route::get('{url}', 'StaticController@getIndex');



