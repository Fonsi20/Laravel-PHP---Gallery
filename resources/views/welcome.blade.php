@extends('plantilla')

@section('seccion')

    <h1 class="display-4">Notas</h1>
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