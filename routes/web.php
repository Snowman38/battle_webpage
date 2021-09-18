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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/battle', 'HomeController@battle')->name('battle');
Route::get('/ranking', 'HomeController@ranking')->name('ranking');
Route::get('/deckpost', 'HomeController@deckpost')->name('deckpost');
Route::get('/setting', 'LogController@setting')->name('setting');
Route::get('/battlehistory', 'HomeController@battlehistory')->name('battlehistory');
Route::get('/battle/search', 'LogController@search')->name('search');
