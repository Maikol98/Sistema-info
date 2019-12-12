@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">LISTA DE ENTREGAS</a>
      </nav>
<p></p>
<div class="text-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nro Entrega</th>
                <th scope="col">Nro Pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $datoss)
                <tr>
                <th class="text-white" scope="row">{{$datoss->IdEntrega}}</th>
                <th class="text-white" scope="row">{{$datoss->IdPedido}}</th>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection
