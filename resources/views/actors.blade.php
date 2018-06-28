@extends('layouts.layout')

@section('titulo')
    Actores
@endsection

@section('contenido')
    {{ dd($actors[1]) }}
    @if($actors[0]!==null && $actors[1]===null)
        <ul>
            <li>{{ $actors->id() }}</li>
            <li>{{ $actors->getName() }}</li>
            <li>{{ $actors->rating }}</li>
            <li>{{ $actors->favourite_movie_id }}</li>
        </ul>
    @elseif($actors[0]!==null)
        <ul>
        @foreach($actors as $actor)
            <li><a href="/actors/{{ $actor->id }}">{{ $actor->getName() }}</a></li>
        @endforeach
        </ul>
    @else
        {{ 'No se encontraron resultados.' }}
    @endif
@endsection