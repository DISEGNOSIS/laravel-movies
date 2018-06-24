<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller {
    
    private $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
    ];

    public function index() {
        $parametros = ["peliculas" => $this->peliculas];
        return view('peliculas', $parametros);
    }

    public function buscarPeliculaId($id) {
        $parametros = [
            "peliculas" => $this->peliculas,
            "id" => $id
        ];
        return view('peliculas', $parametros);
    }

    public function buscarPeliculaNombre($nombre) {
        $mensaje = [];
        foreach($this->peliculas as $pelicula) {
            if(strpos(strtolower($pelicula), strtolower($nombre)) !== false) {
                array_push($mensaje, $pelicula);
            }
        }
        if(empty($mensaje)) {
            $mensaje = "No se encontraron resultados.";
        }
        return $mensaje;
    }

    public function agregarPelicula() {
        if($_POST) {
            return "Película agregada con éxito.";
        } else {
            return view('nuevaPelicula'); 
        }
    }



}
