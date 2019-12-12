@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">SELECCIONAR LOS PEDIDOS A ENTREGAR</a>
</nav>
<p></p>
<div class="text-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nro Pedido</th>
                <th scope="col">PrecioTotal</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Fecha Entrega</th>
                <th scope="col">Direccion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entrega as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <td class="text-white">{{$datos->PrecioTotal}}</td>
                <td class="text-white">{{$datos->FechaPedido}}</td>
                <td class="text-white">{{$datos->FechaEntrega}}</td>
                <td class="text-white">{{$datos->Direccion}}</td>
                <td class="text-white">{{$datos->Descripcion}}</td>
                <td>
                    <form style="display:inline" action="{{route('DetalleEntregaPedido.crear',[$datos->Id,$dato])}}" method="post">
                        {!!csrf_field()!!}
                        <button type="submit" class="btn btn-success">Añadir</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection

