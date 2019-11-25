@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS CLIENTES</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="#CARNET" aria-label="Search">
          <a class="btn btn-secondary my-2 my-sm-0" href="">Buscar</a>
        </form>
      </nav>
<p></p>
    <p><a class="btn btn-success" href="{{route('Cliente.create')}}">Añadir Cliente</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Carnet</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $datosCliente)
                <tr>
                <th scope="row">{{$datosCliente->Ci_Cliente}}</th>
                <td>{{$datosCliente->Nombre}}</td>
                <td>{{$datosCliente->Direccion}}</td>
                <td>{{$datosCliente->Telefono}}</td>
                <td>{{$datosCliente->Correo}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{route('Cliente.edit',$datosCliente->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Cliente.destroy', $datosCliente->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
