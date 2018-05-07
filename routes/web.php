<?php

Route::redirect('/','/posts',301);

Route::get('/posts', 'PostsController@index');
Route::get('/posts/new', 'PostsController@new');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/delete', 'PostsController@delete');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::post('/posts/{post}/comments/{comment}/delete','CommentsController@delete');

Auth::routes();
