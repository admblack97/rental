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

Route::get('', 'RentalController@index')->name('index');
Route::get('dashboard', 'RentalController@dashboard')->name('dashboard');
Route::get('create', 'RentalController@create')->name('create');
Route::post('insert', 'RentalController@insert')->name('insert');
Route::get('delete/{id}', 'RentalController@delete')->name('delete');
Route::get('edit/{id}', 'RentalController@edit')->name('edit');
Route::post('edit/{id}', 'RentalController@submitedit')->name('submitedit');
