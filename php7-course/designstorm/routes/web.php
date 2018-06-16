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

Route::get('/', 'PageController@index');

Route::post('/results', 'PageController@results');

Route::get('/search', 'PageController@index');

Route::get('/search/{keyword}', 'PageController@search');

Route::get('/account', 'AccountController@index');

Route::get('/projects/addimage/{id}', 'ProjectController@addImage');

Auth::routes();
