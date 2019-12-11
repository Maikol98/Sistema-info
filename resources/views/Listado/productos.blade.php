@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">TODOS LOS PRODUCTOS</a>
</nav>
    <P></P>
    <p><a class="btn btn-success" href="{{route('Pedido.create')}}">Realizar pedido</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock diponible</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($producto as $datosProducto)
            <tr>
            <td class="text-white">{{$datosProducto->Nombre}}</td>
            <td class="text-white">{{$datosProducto->Marca}}</td>
            <td class="text-white">{{$datosProducto->Precio}}</td>
            <td class="text-white">{{$datosProducto->Stock}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
