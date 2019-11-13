@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS BAJAS</a>
    </nav>

    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Tipo de Baja</th>
                    <th>Id_Producto</th>
                </thead>
        <tbody>
                @foreach ($baja as $datos)
                <tr>
                    <td>{{$datos->Fecha}}</td>
                    <td>{{$datos->Descripcion}}</td>
                    <td>{{$datos->TipoBaja}}</td>
                    <td>{{$datos->Id_Producto}}</td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
