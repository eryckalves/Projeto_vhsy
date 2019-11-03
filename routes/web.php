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

//Route::get('/', function () {
//    return view('homepage.index');
//});



Auth::routes();

Route::get('/', 'Controller@index')->name('homepage.index');

Route::get('/export', 'ExportFileController@export');

Route::get('/time/create', 'TimeController@create')->name('time.create');
Route::post('/time/store', 'TimeController@store')->name('time.store');

Route::get('/jogador/create', 'JogadorController@create')->name('jogador.create');
Route::post('/jogador/store', 'JogadorController@store')->name('jogador.store');
