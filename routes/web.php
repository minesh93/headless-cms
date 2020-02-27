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
Route::get('/sink', 'TestController@sink');
Route::get('/', 'TestController@sink');

Route::get('/login', 'Auth\LoginController@getLogin')->name('login');
Route::post('/login', 'Auth\LoginController@attemptLogin');

Route::get('/dashboard', 'Admin\DashboardController@view');
Route::get('/content/{type}','Admin\PostListController@getList');
Route::get('/content/{type}/new','Admin\PostController@edit');
Route::get('/content/{type}/edit/{id}','Admin\PostController@edit');

Route::post('/content/{type}/','Admin\PostController@update');
