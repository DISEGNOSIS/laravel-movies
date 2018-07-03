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

Route::get('/movie/add', 'MoviesController@add');

Route::post('/movie/add', 'MoviesController@store');

Route::get('/movie/{id}', 'MoviesController@show');


Route::get('/genres', 'GenreController@index');

Route::get('/genre/{id}', 'GenreController@show');


Route::get('/actors', 'ActorController@index');

Route::get('/actors/search', 'ActorController@search');

Route::get('/actors/add', 'ActorController@add');

Route::post('/actors/add', 'ActorController@store');

Route::get('/actors/{id}', 'ActorController@show');

Route::get('/collection', function() {
    $nombres = [
        "nombre1" => "rosa",
        "nombre2" => "gustavo",
        "nombre3" => "nico",
        "nombre4" => "guada"
    ];
    return view('collection', ["nombres" => collect($nombres)]);
});