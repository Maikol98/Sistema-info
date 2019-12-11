@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS INGRESOS Y SALIDAS</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Ingresosalida.create')}}">Añadir Ingreso/Salida</a></p>
    <div class="text-center">
        <table class="table">
                <thead class="thead-dark">
                    <th>Fecha</th>
                    <th> Tipo</th>
                    <th> id Estante</th>
                </thead>
            <tbody>
                @foreach ($ingresosalida as $datos)
                    <tr>
                        <td class="text-white">{{$datos->Fecha}}</td>
                        <td class="text-white">{{$datos->Tipo}}</td>
                        <td class="text-white">{{$datos->Id_Estante}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
