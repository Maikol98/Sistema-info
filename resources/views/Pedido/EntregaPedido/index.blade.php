@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">ENTREGA DE PEDIDOS</a>
      </nav>
<p></p>
    <p><a class="btn btn-success" href="{{route('EntregaPedido.create')}}">Registrar Entreda de Pedido</a></p>
<div class="text-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nro Entrega</th>
                <th scope="col">Fecha</th>
                <th scope="col">Id Chofer</th>
                <th scope="col">Placa Vehiculo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entregapedido as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <th class="text-white" scope="row">{{$datos->Fecha}}</th>
                <td class="text-white">{{$datos->Id_Chofer}}</td>
                <td class="text-white">{{$datos->PlacaVehiculo}}</td>
                <td><a class="btn btn-primary" href="{{route('EntregaPedido.show',$datos->Id)}}">Detalle</a></td>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection
