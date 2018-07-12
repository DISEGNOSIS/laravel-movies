<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/saludar', function() {
    return response()->json([
        "Hola" => "Guada"
    ]);
});

Route::get('/directors', function() {
    $actors = \App\Actor::all();
    return response()->json($actors);
});

Route::get('/movies', function() {
    $movies = \App\Movie::all();
    return response()->json($movies);
});
