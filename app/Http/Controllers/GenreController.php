<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        $genres = \App\Genre::all();
        return view('genres', compact('genres'));
    }

    public function show($id) {
        $genre = \App\Genre::find($id);
        return view('genre', compact('genre'));
    }
}

