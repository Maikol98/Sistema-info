@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODAS LAS GARANTIAS</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Garantia.create')}}">Añadir Garantia</a></p>
        <table class="table">
                <thead class="thead-dark">
                    <th >Cod Garantia</th>
                    <th> Duracion (Meses)</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($garantia as $datos)
                <tr>
                    <th class="text-white">{{$datos->Cod_Garantia}}</th>
                    <td class="text-white">{{$datos->Duracion}}</td>
                    <td><a class="btn btn-info btn-sm" href="{{route('Garantia.edit',$datos->Id)}}">Editar</a></td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
