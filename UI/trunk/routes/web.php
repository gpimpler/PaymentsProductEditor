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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/user', function () {
    if (Auth::check()) {
        return Auth::user();
    }

    return;
});

Route::get('/api/style/{id}', 'StyleController@style')->where('id', '[0-9]+');
Route::get('/api/style', 'StyleController@styles');

Route::get('/api/product/{id}', 'ProductController@product')->where('id', '[0-9]+');
Route::get('/api/product', 'ProductController@products');