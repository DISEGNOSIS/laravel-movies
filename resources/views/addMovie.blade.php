@extends('layouts.layout')

@section('title')
    Agregar Película
@endsection

@section('content')
    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form id="agregarPelicula" name="agregarPelicula" method="POST">
        {{ csrf_field()}}
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"/>
        </div>
        <div>
            <label for="rating">Género</label>
            <select name="genre" id="genre">
                <option disabled selected>Elegir el género</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</value>
                @endforeach
            </select>
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" id="rating" value="{{ old('rating') }}"/>
        </div>
        <div>
            <label for="awards">Premios</label>
            <input type="text" name="awards" id="awards" value="{{ old('awards') }}"/>
        </div>
        <div>
            <label for="length">Duración</label>
            <input type="text" name="length" id="length" value="{{ old('length') }}"/>
        </div>
        <div>
            <label>Fecha de Estreno</label>
            <select name="day">
                <option value="">Dia</option>
                @for ($i=1; $i < 32; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <select name="month">
                <option value="">Mes</option>
                @for ($i=1; $i < 13; $i++) { ?>
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <select name="year">
                <option value="">Año</option>
                @for ($i=2018; $i > 1900; $i--) { ?>
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <button type="submit" />Agregar Película</button>
    </form>
@endsection