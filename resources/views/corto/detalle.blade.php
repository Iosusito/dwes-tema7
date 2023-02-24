@extends('plantilla')

@section('titulo', 'Festicortos')

@section('contenido')
<p>Subido por {{ $corto->usuario->name }}</p>
<h1>{{ $corto->titulo }}</h1>
<h3>Dirigido por {{ $corto->director->nombre }} {{ $corto->director->apellidos }}</h3>
<p>{{ $corto->sinopsis }}</p>

<a href="{{ route('home') }}">Volver</a>
@endsection