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

Route::get('login', 'Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@attemptLogin');

Route::get('/dashboard', 'Admin\DashboardController@view');
Route::get('/content/{type}','Admin\PostListController@getList');
