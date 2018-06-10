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

Route::get('/', 'PostController@index');
// app/Http/Controllers/PostController

Route::get('/posts/create', function () {
    return "create post";
});


Route::post('/posts', function () {
    return "save post";
});

Route::get('/posts/{title}/edit', function ($title) {
    return "edit post";
});

Route::put('/posts/{title}', function ($title) {
    return "save updated post";
});

Route::delete('/posts/{title}', function ($title) {
    return "delete post";
});
