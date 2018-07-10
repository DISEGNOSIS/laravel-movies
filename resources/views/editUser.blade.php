@extends('layouts.layout')

@section('title')
    Editar Usuario
@endsection

@section('content')
{{ dd($user); }}

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form id="editUser" name="editUser" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ {{-- Auth::user->name ? Auth::user->name : --}} old('name') }}"/>
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

        <button type="submit" />Guardar</button>
    </form>
@endsection