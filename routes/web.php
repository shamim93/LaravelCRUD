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

/*
Route::get('welcome/', function () {
    return view('welcome');
});

*/
Route::get('/','Admin\DashboardController@index')->name('home');
Route::get('create/','Admin\DashboardController@create')->name('create');
Route::post('create/','Admin\DashboardController@store')->name('store');
Route::get('/','Admin\DashboardController@show')->name('show');
Route::get('edit/{id}','Admin\DashboardController@edit')->name('edit');
Route::post('update/{id}','Admin\DashboardController@update')->name('update');
Route::delete('delete/{id}','Admin\DashboardController@destroy')->name('destroy');
