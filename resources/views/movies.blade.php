@extends('layouts.layout')

@section('titulo')
    Películas
@endsection

@section('contenido')
    {{-- CLASE 01:
    @if(isset($id))
        @if($id <= (count($movies)))
            {{ $movies[$id] }}
        @else
           {{ 'No se encontraron resultados.' }}
        @endif --}}
    @if(!$movies[0]==null)
        <ul>
        @foreach($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
        </ul>
    @else
        {{ 'No se encontraron resultados.' }}
    @endif
@endsection