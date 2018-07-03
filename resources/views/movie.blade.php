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
        <h1>{{ $movie->title }}</h1>
        <ul>
            @foreach($movie->actors as $actor)
                <li>{{ $actor->getName() }}</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection