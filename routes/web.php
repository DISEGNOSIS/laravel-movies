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

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/movies/search/{title}', 'MoviesController@search');

Route::get('/addMovie', 'MoviesController@addMovie');

Route::post('/addMovie', 'MoviesController@addMovie');

Route::get('/actors', 'ActorController@index');

Route::get('/actors/{id}', 'ActorController@show');

Route::get('/actors/search/{name}', 'ActorController@search');