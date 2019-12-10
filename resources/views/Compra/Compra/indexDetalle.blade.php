@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">DETALLE DE LA COMPRA</a>
      </nav>
    <p></p>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id Prodcto</th>
                        <th scope="col">Id Compra</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">PrecioUnitario</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
        <tbody>
                @foreach ($detallecompra as $datos)
                <tr>
                    <th class="text-white" scope="raw">{{$datos->Id_Producto}}</th>
                    <th class="text-white" scope="raw">{{$datos->Id_Compra}}</th>
                    <td class="text-white">{{$datos->Cantidad}}</td>
                    <td class="text-white">{{$datos->PrecioUnitario}}</td>
                    <td><a class="btn btn-success" href="{{route('DetalleCompra.editar',[$datos->Id_Producto, $datos->Id_Compra])}}">Editar</a>
                        <form style="display:inline"
                        action="{{route('DetalleCompra.eliminar',[$datos->Id_Producto, $datos->Id_Compra])}}" method="post">

                            {!!csrf_field()!!}

                            <button type="submit" class="btn btn-danger">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <p></p>
    <a class="btn btn-primary btn-sm" href="{{route('NotaCompra.index')}}" role="button">Atras</a>
@endsection
