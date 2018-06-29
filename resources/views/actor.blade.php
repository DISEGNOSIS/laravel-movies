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
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection