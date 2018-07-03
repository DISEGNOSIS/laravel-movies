@extends('layouts.layout')

@section('title')
    Géneros
@endsection

{{-- @section('search')
    <form action="/genres/search" method="get">
        <input type="text" name="query">
        <button type="submit">Buscar</button>
    </form>
@endsection --}}

@section('content')
    @if($genre != null)
        <h1>{{ $genre->name }}</h1>
        <h2>Películas:</h2>
        <ul>
        @foreach($genre->movies as $movie)
            <li><a href="/movie/{{ $movie->id }}">{{ $movie->title }}</a></li>
        @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection