@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS VENTAS</a>
      </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Notaventa.create')}}">Añadir Venta</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Ci Cliente</th>
                <th scope="col">FechaVenta</th>
                <th scope="col">PrecioTotal</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notaventa as $datos)
                <tr>
                <th class="text-white" scope='raw'>{{$datos->Ci_Cliente}}</th>
                <td class="text-white">{{$datos->FechaVenta}}</td>
                <td class="text-white">{{$datos->PrecioTotal}}</td>
                <td><a class="btn btn-primary" href="{{route('Notaventa.show',$datos->Id)}}" role="button">Detalle</a>
                    <a style="display:inline" class="btn btn-success" href="{{route('Notaventa.detalle',$datos->Id)}}" role="button">Añadir Producto</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
