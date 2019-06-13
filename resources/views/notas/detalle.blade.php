@extends('plantilla')

@section('seccion')
    <h1 class="display-4 my-4">Detalle de nota:</h1>
    <h4>ID: {{$nota->id}}</h4>
    <h4>Nombre: {{$nota->nombre}}</h4>
    <h4>Descripcion: {{$nota->descripcion}}</h4>
@endsection