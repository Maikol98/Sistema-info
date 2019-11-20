@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS COMPRAS</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Fecha Compra</th>
                    <th>Precio Total</th>
                    <th>Id Proveedor</th>
                    <th>Accion</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($notacompra as $datos)
                <tr>
                    <td>{{$datos->FechaCompra}}</td>
                    <td>{{$datos->PrecioTotal}}</td>
                    <td>{{$datos->Id_Proveedor}}</td>
                    <td><a  href="{{route('DetalleCompra.create',$datos->Id)}}">Nota Compra</a></td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
