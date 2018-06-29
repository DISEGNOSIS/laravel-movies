@extends('layouts.layout')

@section('title')
    Películas
@endsection

@section('content')
    {{-- CLASE 01:
    @if(isset($id))
        @if($id <= (count($movies)))
            {{ $movies[$id] }}
        @else
           {{ 'No se encontraron resultados.' }}
        @endif --}}
    @if($movie != null)
        <ul>
            <li>{{ $movie->title }}</li>
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection