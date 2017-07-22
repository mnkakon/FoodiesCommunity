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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
//Route::get('edithome', 'HomeController@editindex')->name('edithome');
Route::get('create/{id}', 'HomeController@create')->name('create');
Route::post('create', 'HomeController@store')->name('store');
Route::get('edit/{id}', 'HomeController@edit')->name('edit');
Route::put('edit/{id}', 'HomeController@update')->name('update');
Route::get('delete/{id}', 'HomeController@delete')->name('delete');

Route::get('notification', 'HomeController@notificationindex')->name('notification');
Route::get('home/{id}', 'HomeController@categoryindex')->name('filterednotification');
