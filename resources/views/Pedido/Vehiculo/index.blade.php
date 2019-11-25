@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS VEHICULOS</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="NOOB007" aria-label="Search">
          <a class="btn btn-secondary my-2 my-sm-0" href="">Buscar</a>
        </form>
      </nav>
<p></p>
        <p><a class="btn btn-success" href="{{route('Vehiculo.create')}}">Añadir Vehiculo</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Capacidad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculo as $datos)
                <tr>
                <th scope="row">{{$datos->Placa}}</th>
                <td>{{$datos->Modelo}}</td>
                <td>{{$datos->Color}}</td>
                <td>{{$datos->Capacidad}}</td>
                <td><a class="btn btn-primary " href="{{route('Vehiculo.edit',$datos->Placa)}}">Editar</a>
                    <form style="display:inline" action="{{route('Vehiculo.destroy', $datos->Placa)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger ">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
