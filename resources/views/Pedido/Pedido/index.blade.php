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
<div class="text-center">
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
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <th class="text-white" scope="row">{{$datos->Ci_Cliente}}</th>
                <td class="text-white">{{$datos->PrecioTotal}}</td>
                <td class="text-white">{{$datos->FechaPedido}}</td>
                <td class="text-white">{{$datos->FechaEntrega}}</td>
                <td class="text-white">{{$datos->Direccion}}</td>
                <td class="text-white">{{$datos->Descripcion}}</td>
                <td class="text-white">{{$datos->Estado}}</td>
                <td><a class="btn btn-primary" href="{{route('Pedido.show',$datos->Id)}}">Detalle</a>
                    <a class="btn btn-success" href="{{route('Detallepedido.create', $datos->Id)}}" method="post">Añadir Detalle</a>
                    <form style="display:inline" action="{{route('Pedido.destroy',$datos->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}

                        <button type="submit" class="btn btn-danger">Cancelar</button></form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table></div>
@endsection
