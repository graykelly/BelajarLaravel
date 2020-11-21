<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create'); //route menampilkan UI
Route::post('posts/store', 'PostController@store'); //route untuk memasukan ke database/action
Route::get('posts/{post:slug}', 'PostController@show');


Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('login', 'login');
