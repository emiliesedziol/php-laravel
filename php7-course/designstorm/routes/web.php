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
Route::get('/account', 'AccountController@index');
// account projects
Route::get('/account/projects', 'ProjectController@index');
Route::get('/account/projects/create', 'ProjectController@create');
Route::post('/account/projects', 'ProjectController@store');
Route::get('/account/projects/{id}', 'ProjectController@show');
Route::get('/account/projects/{id}/edit', 'ProjectController@edit');
Route::get('/account/projects/{id}', 'ProjectController@update');
Route::get('/account/projects/{id}', 'ProjectController@destroy');


//pages
Route::get('/', 'PageController@index');
Route::post('/results', 'PageController@results');
Route::get('/search', 'PageController@index');
Route::get('/search/{keyword}', 'PageController@search');



Route::get('/projects/insperation/{id}/add', 'InsperationController@addImage')->middleware('auth');

Auth::routes();
