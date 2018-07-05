@extends('layouts.layout')

@section('title')
    Películas
@endsection

@section('search')
    <form action="/movies/search" method="get">
        <input type="text" name="query">
        <button type="submit">Buscar</button>
    </form>
@endsection

@section('content')
    {{-- CLASE 01:
    @if(isset($id))
        @if($id <= (count($movies)))
            {{ $movies[$id] }}
        @else
           {{ 'No se encontraron resultados.' }}
        @endif --}}
    @if($movies != null)
        <ul>
        @foreach($movies as $movie)
            <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a> - Genre: {{ $movie->genre ? $movie->genre->name: 'not defined' }}</li>
        @endforeach
        </ul>
        {{ $movies->links() }}
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection