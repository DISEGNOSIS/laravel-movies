@extends('layouts.layout')

@section('titulo')
    Películas
@endsection

@section('contenido')
    @if(isset($id))
        @if($id <= (count($peliculas)))
            {{ $peliculas[$id] }}
        @else
           {{ 'No se encontraron resultados.' }}
        @endif
    @elseif(!empty($peliculas))
        <ul>
        @foreach($peliculas as $pelicula)
            <li>{{ $pelicula }}</li>
        @endforeach
        </ul>
    @else
        {{ 'No se encontraron resultados.' }}
    @endif
@endsection