@extends('plantilla')

@section('seccion')
<h1 class="display-4">Editar Nota: {{$nota->id}}</h1>

    @if (session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
        
    @endif

    <form action="{{route('notas.update',$nota->id)}}" method="POST">
        @method('PUT')
        @csrf
        @error('nombre')
            <div class="div alert alert-danger">Campo Nombre vacio. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
        @enderror

        @error('descripcion')
            <div class="div alert alert-danger">Campo Descripcion vacio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
            </div>
        @enderror

        <div class="form-group">
              <label>Nombre</label>
              <input value ="{{$nota->nombre}}" type="text" name="nombre" class="form-control" aria-describedby="Nombre Helper" placeholder="Introduce un nombre">
              <small class="form-text text-muted">Todos los cambios realizados de actualizaran en la tabla.</small>
        </div>
        <div class="form-group">
              <label>Descipcion</label>
              <input value ="{{$nota->descripcion}}" type="text" name="descripcion" class="form-control" placeholder="Descripcion">
              <small class="form-text text-muted">Maximo 120 caracteres.</small>
        </div>
        <button type="submit" class="btn btn-warning btn-block mb-4">Editar</button>
    </form>
@endsection