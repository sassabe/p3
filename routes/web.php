<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|

*/

# Homepage
Route::get('/', function(){
  return view('welcome');
 });
 /*Route::get('/IpsumController@index')->name('ipsum.index');*/

#Lorem Ipsum Generator
Route::get('/lorem-ipsum', 'IpsumController@index')->name(''); #review names?

#Random User Generator
Route::get('/random-user', 'RandomUserController@index')->name('');#review names?
