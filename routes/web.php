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

Route::resource('customers', 'CustomerController');

Route::resource('progresses', 'ProgressController');
Route::post('/progresses/search', 'ProgressController@search');

Auth::routes();
