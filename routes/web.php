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

Route::get('/peliculas', 'PeliculasController@index');

Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');

Route::get('/agregarPelicula', 'PeliculasController@agregarPelicula');

Route::post('/agregarPelicula', 'PeliculasController@agregarPelicula');