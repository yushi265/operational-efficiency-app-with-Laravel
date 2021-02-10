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


Auth::routes();

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
    Route::get('/admin', 'UserController@admin_index');
    Route::patch('/admin', 'UserController@admin_set');
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('/customers/create', 'CustomerController@create');
    Route::post('/customers', 'CustomerController@store');
    Route::get('/customers/{customer}/edit', 'CustomerController@edit');
    Route::patch('/customers/{customer}', 'CustomerController@update');

    Route::get('/progresses/{progress}/edit', 'ProgressController@edit');
    Route::patch('/progresses/{progress}', 'ProgressController@update');
    Route::delete('/progresses/{progress}', 'ProgressController@destroy');

    Route::get('/contracts/create', 'ContractController@create');
    Route::post('contracts', 'ContractController@store');
    Route::get('/contracts/{contract}/edit', 'ContractController@edit');
    Route::patch('/contracts/{contract}', 'ContractController@update');
    Route::delete('/contracts/{contract}', 'ContractController@destroy');
});

// 全ユーザ
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    Route::get('/home', 'UserController@home');

    Route::get('/customers', 'CustomerController@index');
    Route::get('/customers/{customer}', 'CustomerController@show');

    Route::resource('progresses', 'ProgressController');
    Route::post('/progresses/search', 'ProgressController@search');

    Route::get('/contracts', 'ContractController@index');
    Route::post('/contracts/search', 'ContractController@search');
});
