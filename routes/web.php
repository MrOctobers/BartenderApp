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

Route::get('/', 'HomeController@home');
Auth::routes();
Route::get('/menu', 'HomeController@menu')->name('ViewMenu');

Route::get('/queue', 'HomeController@queue')->name('ViewQueue');
