@extends('plantilla')

@section('seccion')
<h1 class="display-4">Blog</h1>

<div class="card-deck my-4">
        @foreach ($blog as $item)
    <div class="card">
      <img src="images\foto1.jpg" class="card-img-top" alt="images\foto1.jpg">
      <div class="card-body">
        <h5 class="card-title">{{$item->titulo}}</h5>
        <p class="card-text">{{$item->mensaje}}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{$item->usuario}} - {{$item->created_at}}</small>
      </div>
    </div>
    @endforeach
  </div>
  @endsection