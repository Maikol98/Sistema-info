@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">DETALLE PEDIDO</a>
</nav>
<p></p>
<a style="display:inline" class="btn btn-primary" href="{{route('Pedido.index')}}">Volver</a>
<p></p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id_Pedido</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">SubTotal</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detalle as $datos)
                <tr>
                <th scope="row">{{$datos->Id_Pedido}}</th>
                <th scope="row">{{$datos->Nombre}}</th>
                <td>{{$datos->Descripcion}}</td>
                <td>{{$datos->Cantidad}}</td>
                <td>{{$datos->SubTotal}}</td>
                <td><a class="btn btn-primary" href="{{route('Detallepedido.edit',[$datos->Id_Pedido,$datos->Id_Producto])}}">Editar</a>
                    <form style="display:inline"
                        action="{{route('Detallepedido.destroy',[$datos->Id_Pedido,$datos->Id_Producto])}}" method="post">

                            {!!csrf_field()!!}

                            <button type="submit" class="btn btn-danger">Elimnar</button>
                        </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
