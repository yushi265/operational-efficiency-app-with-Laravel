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

Route::get('/customer', 'CustomerController@index')->name('index');
Route::get('/customer/create', 'CustomerController@create')->name('create');
Route::post('/customer', 'CustomerController@store')->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
