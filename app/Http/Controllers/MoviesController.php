<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /* private $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
    ]; */

    public function index() {
        $movies = \App\Movie::all();
        return view('movies', compact("movies"));
        /* CLASE 01:
        $parametros = ["peliculas" => $this->peliculas];
        return view('peliculas', $parametros); */
    }

    public function show($id) {
        $movies = [\App\Movie::find($id)];
        return view('movies', compact("movies"));
        /*  CLASE 01:
        $parametros = [
            "peliculas" => $this->peliculas,
            "id" => $id
        ];
        return view('peliculas', $parametros); */
    }

    public function search($title) {
        $movies = \App\Movie::where('title', 'LIKE', '%'.$title.'%')->get();
        return view('movies', compact("movies"));
        /* CLASE 01:
        $mensaje = [];
        foreach($this->peliculas as $pelicula) {
            if(strpos(strtolower($pelicula), strtolower($nombre)) !== false) {
                array_push($mensaje, $pelicula);
            }
        }
        if(empty($mensaje)) {
            $mensaje = "No se encontraron resultados.";
        }
        return $mensaje; */
    }

    public function addMovie() {
        if($_POST) {
            return "Película agregada con éxito.";
        } else {
            return view('nuevaPelicula'); 
        }
    }
}
