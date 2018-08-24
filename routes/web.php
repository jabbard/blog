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

Route::get('/','ApplicationController@index');

Route::get('/home','ApplicationController@index')->name('home');

Route::get('/about','ApplicationController@about')->name('about');

Route::get('/contact','ApplicationController@contact')->name('contact');

Route::any('/add', 'ApplicationController@addUser')->name('add');