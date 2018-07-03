@extends('layouts.layout')

@section('title')
    Collections
@endsection

@section('content')
    {{ dd($nombres) }}
    {{-- @if($nombres != null)
        <ul>
        @foreach($genres as $genre)
            <li><a href="/genre/{{ $genre->id }}">{{ $genre->name }}</a></li>
        @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif --}}
@endsection