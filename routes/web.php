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

Route::middleware('auth')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::prefix('user')->group(function () {

        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('create', 'UserController@create')->name('user.create');
        Route::post('store', 'UserController@store')->name('user.store');
        Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
        Route::put('update/{id}', 'UserController@update')->name('user.update');
        Route::delete('delete/{id}', 'UserController@destroy')->name('user.delete');
    });

    // all routes
    // ...

});