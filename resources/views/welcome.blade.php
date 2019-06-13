@extends('plantilla')

@section('seccion')

    <h1 class="display-4">Notas</h1>

    @if (session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
        
    @endif

    <form action="{{route('notas.crear')}}" method="POST">
        @csrf
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombre" class="form-control" aria-describedby="Nombre Helper" placeholder="Introduce un nombre">
              <small class="form-text text-muted">Los datos introducidos apareceran en la tabla de abajo.</small>
            </div>
            <div class="form-group">
              <label>Descipcion</label>
              <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Agregar</button>
          </form>

    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Create</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a class="btn btn-info" href="{{route('notas.detalle',$item)}}">More Info</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          @endsection