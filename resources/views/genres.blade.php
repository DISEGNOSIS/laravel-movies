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
    @if($genres != null)
        <ul>
        @foreach($genres as $genre)
            <li><a href="/genres/{{ $genre->id }}">{{ $genre->name }}</a></li>
        @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endsection