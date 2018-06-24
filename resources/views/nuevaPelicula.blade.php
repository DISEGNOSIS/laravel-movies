@extends('layouts.layout')

@section('titulo')
    Agregar Película
@endsection

@section('contenido')
    <form id="agregarPelicula" name="agregarPelicula" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo"/>
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" id="rating"/>
        </div>
        <div>
            <label for="premios">Premios</label>
            <input type="text" name="premios" id="premios"/>
        </div>
        <div>
            <label for="duracion">Duración</label>
            <input type="text" name="duracion" id="duracion"/>
        </div>
        <div>
            <label>Fecha de Estreno</label>
            <select name="dia">
                <option value="">Dia</option>
                <?php for ($i=1; $i < 32; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <select name="mes">
                <option value="">Mes</option>
                <?php for ($i=1; $i < 13; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <select name="anio">
                <option value="">Año</option>
                <?php for ($i=2018; $i > 1900; $i--) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Agregar Película" name="submit"/>
    </form>
@endsection