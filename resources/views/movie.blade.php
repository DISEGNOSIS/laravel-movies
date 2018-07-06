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
        <p>ID: {{ $movie->id }}</p>
        <p>Género: <a href="/genres/{{ $movie->genre ? $movie->genre->id : '' }}">{{ $movie->genre ? $movie->genre->name : 'not defined' }}</a></p>
        <p>Premios: {{ $movie->awards }}</p>
        <p>Duración: {{ $movie->length }}</p>
        <ul>
            <h2>Actores:</h2>
            @foreach($movie->actors as $actor)
                <li><a href="/actors/{{ $actor->id }}">{{ $actor->getName() }}</a></li>
            @endforeach
        </ul>
        <div>
            <h2>Poster:</h2>
            <img src="{{ $movie->poster }}" alt="{{ $movie->title }}" />
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection