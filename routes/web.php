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

#Lorem Ipsum Generator
Route::get('/lorem-ipsum/create', 'IpsumController@create')->name('lorem-ipsum.create');
Route::post('/lorem-ipsum/store', 'IpsumController@store')->name('lorem-ipsum.store');

#Random User Generator
Route::get('/random-user/create', 'RandomUserController@create')->name('random-user.create');
Route::post('/random-user/store', 'RandomUserController@store')->name('random-user.store');
