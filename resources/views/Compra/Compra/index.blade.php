@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS COMPRAS</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Id Proveedor</th>
                    <th>Fecha Compra</th>
                    <th>Precio Total</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($notacompra as $datos)
                <tr>
                    <td>{{$datos->Cod_Proveedor}}</td>
                    <td>{{$datos->FechaCompra}}</td>
                    <td>{{$datos->PrecioTotal}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('NotaCompra.show',$datos->id)}}" role="button">Detalle</a>
                    <a style="display:inline" class="btn btn-primary btn-sm" href="{{route('NotaCompra.detalle',$datos->id)}}" role="button">Añadir detalle</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
