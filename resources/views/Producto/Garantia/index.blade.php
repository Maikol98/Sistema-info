@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS GARANTIAS</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Cod Garantia</th>
                    <th> Duracion</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($garantia as $datos)
                <tr>
                    <td>{{$datos->Cod_Garantia}}</td>
                    <td>{{$datos->Duracion}}</td>
                    <td><a  href="{{route('Garantia.edit',$datosDelAlmacen->Id)}}">Editar</a></td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
