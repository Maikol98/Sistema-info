@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS PEDIDOS</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="#CARNET" aria-label="Search">
          <a class="btn btn-secondary my-2 my-sm-0" href="">Buscar</a>
        </form>
      </nav>
<p></p>
    <p><a class="btn btn-success" href="{{route('Pedido.create')}}">Añadir Pedido</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nro Pedido</th>
                <th scope="col">Carnet Cliente</th>
                <th scope="col">PrecioTotal</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Fecha Entrega</th>
                <th scope="col">Direccion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedido as $datos)
                <tr>
                <th scope="row">{{$datos->Id}}</th>
                <th scope="row">{{$datos->Ci_Cliente}}</th>
                <td>{{$datos->PrecioTotal}}</td>
                <td>{{$datos->FechaPedido}}</td>
                <td>{{$datos->FechaEntrega}}</td>
                <td>{{$datos->Direccion}}</td>
                <td>{{$datos->Descripcion}}</td>
                <td>{{$datos->Estado}}</td>
                <td><a class="btn btn-primary" href="{{route('Pedido.show',$datos->Id)}}">Detalle</a>
                    <a class="btn btn-success" href="{{route('Detallepedido.create', $datos->Id)}}" method="post">Añadir Detalle</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
