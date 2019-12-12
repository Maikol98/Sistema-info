@extends('layout')

@section('contenido')
        <nav class="navbar navbar-dark bg-primary">
            <a href="" class="navbar-brand">TODAS LAS DEVOLUCIONES</a>
        </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Devolucion.lista')}}">Añadir Devolucion</a></p>
        <div class="text-center">


        <table class="table">
                <thead  class="thead-dark">
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Nro Pedido</th>
                </thead>
        <tbody>
                @foreach ($devolucion as $datos)
                <tr>
                    <th class="text-white">{{$datos->Fecha}}</th>
                    <th class="text-white">{{$datos->Descripcion}}</th>
                    <th class="text-white">{{$datos->Cantidad}}</th>
                    <th class="text-white">{{$datos->Id_DetallePedido}}</th>
                </tr>
                @endforeach

        </tbody>
    </table>
</div>
@endsection
