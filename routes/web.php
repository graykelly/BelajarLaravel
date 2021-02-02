<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');

Route::get('posts/create', 'PostController@create'); //route menampilkan UI/view
Route::post('posts/store', 'PostController@store'); //route untuk memasukan ke database/action

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update');

//put : untuk mengupdate semua field
//patch : update secara parsial/sebagian yg diinginkan

Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::get('categories/{category:slug}', 'CategoryController@show');

Route::get('posts/{post:slug}', 'PostController@show');


Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('login', 'login');
