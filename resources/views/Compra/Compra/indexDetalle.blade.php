@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">DETALLE DE LA COMPRA</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Id Prodcto</th>
                    <th>Id Compra</th>
                    <th>Cantidad</th>
                    <th>PrecioUnitario</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($detallecompra as $datos)
                <tr>
                    <td>{{$datos->Id_Producto}}</td>
                    <td>{{$datos->Cantidad}}</td>
                    <td>{{$datos->PrecioUnitario}}</td>
                    <td><a  href="{{route('DetalleCompra.edit',$datos->Id)}}">Editar</a>
                        <form style="display:inline" action="{{route('DetalleCompra.destroy', $datos->Id)}}" method="post">
                            {!!csrf_field()!!}
                            {!!method_field('DELETE')!!}
                            <button type="submit">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
