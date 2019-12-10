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

<div class="container">
    <p><a class="btn btn-success" href="{{route('Cliente.create')}}">Añadir Cliente</a></p>

    <div class="text-center">
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
                <th class="text-white" scope="row">{{$datosCliente->Ci_Cliente}}</th>
                <td class="text-white">{{$datosCliente->Nombre}}</td>
                <td class="text-white">{{$datosCliente->Direccion}}</td>
                <td class="text-white">{{$datosCliente->Telefono}}</td>
                <td class="text-white">{{$datosCliente->Correo}}</td>
                <td class="text-white"><a class="btn btn-primary" href="{{route('Cliente.edit',$datosCliente->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Cliente.destroy', $datosCliente->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form></td>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
