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

Route::get('/', 'HomeController@index');
Route::get('/search', 'SearchController@show');
Route::get('/bands/random', 'BandsController@random');
Route::get('/bands/{band}', 'BandsController@show');
Route::get('/albums/{album}', 'AlbumsController@show');

//Route::get('/bands', 'BandsController@index')->name('bands');
