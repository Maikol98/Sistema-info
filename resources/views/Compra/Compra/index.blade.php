@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS COMPRAS</a>
      </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('NotaCompra.create')}}">Añadir Compra</a></p>

        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id Proveedor</th>
                        <th scope="col">Fecha Compra</th>
                        <th scope="col">Precio Total</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
        <tbody>
                @foreach ($notacompra as $datos)
                <tr>
                    <th scope="raw">{{$datos->Cod_Proveedor}}</th>
                    <td>{{$datos->FechaCompra}}</td>
                    <td>{{$datos->PrecioTotal}}</td>
                    <td><a class="btn btn-primary" href="{{route('NotaCompra.show',$datos->id)}}" role="button">Detalle</a>
                    <a style="display:inline" class="btn btn-success" href="{{route('NotaCompra.detalle',$datos->id)}}" role="button">Añadir Producto</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
