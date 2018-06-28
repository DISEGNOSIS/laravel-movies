<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index() {
        $actors = \App\Actor::all();
        return view('actors', compact("actors"));
    }
    public function show($id) {
        $actors = [\App\Actor::find($id)];
        return view('actors', compact("actors"));
    }
    public function search($name) {
        $actors = \App\Movie::where('title', 'LIKE', '%'.$name.'%')->get();
        return view('actors', compact("actors"));
    }
}
