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
Auth::routes();

Route::get('/', 'PagesController@getWelcome')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('book', 'BookController');

Route::resource('car', 'CarController');

Route::resource('customer', 'CustomerController');






