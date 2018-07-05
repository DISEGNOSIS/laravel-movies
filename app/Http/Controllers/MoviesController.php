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
        $movies = \App\Movie::paginate(15);
        return view('movies', compact("movies"));
        /* CLASE 01:
        $parametros = ["peliculas" => $this->peliculas];
        return view('peliculas', $parametros); */
    }

    public function show($id) {
        $movie = \App\Movie::find($id);
        return view('movie', compact("movie"));
        /*  CLASE 01:
        $parametros = [
            "peliculas" => $this->peliculas,
            "id" => $id
        ];
        return view('peliculas', $parametros); */
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $movies = \App\Movie::where('title', 'LIKE', '%'. $query .'%')->get();
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

    public function add() {
        $genres = \App\Genre::all();
        return view('addMovie', compact('genres'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:movies|max:255',
            'genre_id' => 'numeric',
            'rating' => 'required|numeric',
            'awards' => 'required|numeric',
            'length' => 'numeric',
            'day' => 'numeric',
            'month' => 'numeric',
            'year' => 'numeric'
        ]);
        /* GUARDA DIRECTO EN LA DB:*/
        /* $movie = \App\Movie::create([
            'title' => $request->input('title'),
            'genre_id' => $request->input('genre'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('year') . '-' . $request->input('month') . '-' . $request->input('day')
        ]); */

        // INSTACIA Y DESPUÉS CON SAVE() SE GUARDA:
        $movie = new \App\Movie([
            'title' => $request->input('title'),
            'genre_id' => $request->input('genre'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('year') . '-' . $request->input('month') . '-' . $request->input('day')
        ]);
        $path = $request->file('poster')->storePublicly('public/poster');
        $movie->poster = str_replace('public', '/storage', $path);
        $movie->save();

        return view('movie', compact('movie'));
    }

    public function edit($id) {
        $movie = \App\Movie::find($id);
        $movie->title = "Nuevo Título";
        $movie->save();
    }
}
