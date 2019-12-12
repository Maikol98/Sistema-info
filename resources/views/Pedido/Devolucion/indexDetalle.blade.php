@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS PEDIDOS HABILITADOS PARA DEVOLUCION</a>
      </nav>
<p></p>
<div class="text-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devolucion as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Cantidad}}</th>
                <td class="text-white">{{$datos->Nombre}}</td>
                <td><a class="btn btn-success" href="{{route('Devolucion.creates',$datos->Id)}}">Devolucion</a></td>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection
