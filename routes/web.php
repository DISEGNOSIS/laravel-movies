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

Route::get('/', function() {
    return view('welcome');
});


Route::get('/movies', 'MoviesController@index');

Route::get('/movies/search', 'MoviesController@search');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/movie/add', 'MoviesController@add');

Route::post('/movie/add', 'MoviesController@store');

Route::get('/actors', 'ActorController@index');

Route::get('/actors/search', 'ActorController@search');

Route::get('/actors/{id}', 'ActorController@show');

Route::get('/actors/add', 'ActorController@add');

Route::post('/actors/add', 'ActorController@store');