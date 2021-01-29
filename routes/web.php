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

use App\Http\Controllers\CustomerController;

Route::get('/customers', 'CustomerController@index')->name('index');
Route::get('/customers/create', 'CustomerController@create')->name('create');
Route::post('/customers', 'CustomerController@store')->name('store');
Route::get('/customers/{customer}', 'CustomerController@show')->name('show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('edit');
Route::patch('/customers/{customer}', 'CustomerController@update')->name('update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
