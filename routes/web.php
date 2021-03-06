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


Route::prefix('movies')->middleware('movies')->name('movies')->group(function() {

    Route::get('/', 'MoviesController@index');

    Route::get('/search', 'MoviesController@search');

    Route::get('/add', 'MoviesController@add');

    Route::post('/add', 'MoviesController@store');

    Route::get('/{id}', 'MoviesController@show');

});

Route::get('/genres', 'GenreController@index');

Route::get('/genres/{id}', 'GenreController@show');


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

Route::get('/explode', function() {
    $nombres = "Mariela, Rosa, Romi, Guada";
    var_dump(explode(',', $nombres));
});

Route::get('/implode', function() {
    $nombres = ["Mariela", "Rosa", "Romi", "Guada"];
    var_dump($nombres);
    echo implode(' | ', $nombres);
});

Auth::routes();

Route::get('registracion', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registracion', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function() {
    echo "Bienvenido " . Auth::user()->name;
})->middleware('auth');

Route::get('/users/edit', 'UsersController@update');
