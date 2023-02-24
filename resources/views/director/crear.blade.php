@extends('plantilla')

@section('titulo', 'Festicortos')

@section('contenido')
<form action="{{ route('directores.create') }}" method="post">
    <input type="text" name="nombre">
    <input type="text" name="apellidos">
    <input type="submit" value="Crear">
</form>
@endsection