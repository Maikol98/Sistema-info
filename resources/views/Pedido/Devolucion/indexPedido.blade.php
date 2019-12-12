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
                <th scope="col">Nro Pedido</th>
                <th scope="col">Carnet Cliente</th>
                <th scope="col">PrecioTotal</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devolucion as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <th class="text-white" scope="row">{{$datos->Ci_Cliente}}</th>
                <td class="text-white">{{$datos->PrecioTotal}}</td>
                <td class="text-white">{{$datos->FechaPedido}}</td>
                <td><a class="btn btn-primary" href="{{route('Devolucion.detalle',$datos->Id)}}">Detalle</a></td>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection
