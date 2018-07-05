@extends('layouts.layout')

@section('title')
    Actores
@endsection

@section('content')
    {{-- {{ dd($actor) }} --}}
    {{-- $actor->isNotEmpty() --}}
    @if($actor != null)
        <h1>Nombre Completo: {{ $actor->getName() }}</h1>
        <p>ID: {{ $actor->id }}</p>
        <p>Rating: {{ $actor->rating }}</p>
        {{-- <li>{{ $actor[0]->favourite_movie_id }}</li> --}}
        <ul>
            <h2>Películas:</h2>
            @foreach($actor->movies as $movie)
                <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection