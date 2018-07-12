@extends('layouts.layout')

@section('title')
    Editar Usuario
@endsection

@section('content')
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
            <input type="text" name="name" id="name" value="{{ Auth::user() ? Auth::user()->name : old('name') }}"/>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{  Auth::user() ? Auth::user()->email : old('email') }}"/>
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="text" name="pass" id="pass" value="{{ old('pass') }}"/>
        </div>
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" value="{{ Auth::user() ? Auth::user()->dni :  old('dni') }}"/>
        </div>

        <button type="submit" />Guardar</button>
    </form>
@endsection