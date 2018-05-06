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

Route::redirect('/','/posts',301);

Route::get('/posts', 'PostsController@index');
Route::get('/posts/new', 'PostsController@new');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/delete', 'PostsController@delete');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::post('/posts/{post}/comments/delete/{comment}','CommentsController@delete');

Auth::routes();
