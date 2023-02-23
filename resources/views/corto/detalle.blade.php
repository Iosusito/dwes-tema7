@extends('plantilla')

@section('titulo', 'Festicortos')

@section('contenido')
<h1>{{ $corto['titulo'] }}</h1>
<h3>{{ $corto['director'] }}</h3>
<p>{{ $corto['sinapsis'] }}</p>

<a href="{{ route('home') }}">Volver</a>
@endsection