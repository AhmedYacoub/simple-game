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

Route::get('/', 'GameController@index')->name('game.index');
Route::get('/game/play', 'GameController@play')->name('game.play');
Route::post('/game/results', 'GameController@results')->name('game.results');
