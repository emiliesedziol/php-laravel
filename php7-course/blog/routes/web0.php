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

Route::get('/', function () {
    return 'X marks the spot';
});


Route::get('/posts/{id}', function ($id) {
    return "posts id: {$id}";
});
Route::get('/posts/{id}/comments/{comment_id}', function ($id, $comment_id) {
    return "posts id: {$id}<br>
    comment_id: {$comment_id}";
    // http://localhost:8888/posts/26/comments/21
    /*
    posts id: 26
    comment_id: 21
    */
});
Route::get('/posts/{id}/comments/{comment_id}/{likes}', function ($id, $comment_id, $likes) {
    return $likes;
    //  http://localhost:8888/posts/26/comments/21/65
    // returns 65
});

Route::post('/', function () {
    return 'X marks post';
});
Route::put('/', function () {
    return 'X marks put';
});
Route::patch('/', function () {
    return 'X marks patch';
});
Route::delete('/', function () {
    return 'X marks delete';
});
