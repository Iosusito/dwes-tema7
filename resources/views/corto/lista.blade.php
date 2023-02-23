@extends('plantilla')

@section('titulo', 'Festicortos')

@section('contenido')
@forelse ($cortos as $corto)
<h2>{{ $corto->titulo }}</h2>
<small>{{ $corto->director }}</small>
<p>{{ $corto->sinapsis }}</p>

<a href="{{ route('cortos.show', $corto->id]) }}">Detalles</a>
<hr>
@empty
<p>No hay cortos actualmente</p>
@endforelse 
@endsection