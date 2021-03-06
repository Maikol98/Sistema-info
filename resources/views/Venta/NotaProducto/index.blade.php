@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">DETALLE DE LA VENTA</a>
    </nav>
    <p></p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id_Producto</th>
                <th scope="col">Id_NotaVenta</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detalleventa as $datos)
                <tr>
                    <th class="text-white" scope="raw">{{$datos->Id_Producto}}</th>
                    <th class="text-white" scope="raw">{{$datos->Id_NotaVenta}}</th>
                    <td class="text-white">{{$datos->Cantidad}}</td>
                    <td class="text-white">{{$datos->PrecioUnitario}}</td>
                    <td><a class="btn btn-success" href="{{route('DetalleVenta.editar',[$datos->Id_Producto, $datos->Id_NotaVenta])}}">Editar</a>
                        <form style="display:inline"
                        action="{{route('DetalleVenta.eliminar',[$datos->Id_Producto, $datos->Id_NotaVenta])}}" method="post">

                            {!!csrf_field()!!}

                            <button type="submit" class="btn btn-danger">Elimnar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p></p>
    <a class="btn btn-primary" href="{{route('Notaventa.index')}}" role="button">Atras</a>
@endsection
