@extends('layouts.layout')

@section('title')
    Actores
@endsection

@section('search')
    <form action="/actors/search" method="get">
        <input type="text" name="query">
        <button type="submit">Buscar</button>
    </form>
@endsection

@section('content')
    @if($actors != null)
        <ul>
        @foreach($actors as $actor)
            <li><a href="/actors/{{ $actor->id }}">{{ $actor->getName() }}</a></li>
        @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection
