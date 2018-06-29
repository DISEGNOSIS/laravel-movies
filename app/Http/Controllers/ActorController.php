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
        $actor = \App\Actor::find($id);
        return view('actor', compact("actor"));
    }
    public function search(Request $request) {
        $query = $request->input('query');
        $actors = \App\Actor::where('first_name', 'LIKE', '%'. $query .'%')->get();
        return view('actors', compact("actors"));
    }
}
