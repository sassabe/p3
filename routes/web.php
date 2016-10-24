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
Route::get('/lorem-generator', 'IpsumController@create')->name(''); #review names?
Route::post('/lorem-generator', 'IpsumController@store')->name('');
#Random User Generator
Route::get('/random-user', 'RandomUserController@create')->name('');#review names?
Route::post('/random-user', 'RandomUserController@store')->name('');
