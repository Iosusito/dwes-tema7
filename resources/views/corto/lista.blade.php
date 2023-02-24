@extends('plantilla')

@section('titulo', 'Festicortos')

@section('contenido')
@forelse ($cortos as $corto)
<h2>{{ $corto->titulo }}</h2>
<small>{{ $corto->director->nombre }} {{ $corto->director->apellidos }}</small>
<p>{{ $corto->sinopsis }}</p>

<a href="{{ route('cortos.show', $corto->id) }}">Detalles</a>
<hr>
@empty
<p>No hay cortos actualmente</p>
@endforelse 
@endsection