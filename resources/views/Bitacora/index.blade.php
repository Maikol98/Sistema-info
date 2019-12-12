@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">BITACORA</a>
</nav>
<p></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Nombre Usuario</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bitacora as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->id}}</th>
                <td class="text-white" scope="raw">{{$datos->nombreUser}}</td>
                <td class="text-white" scope="raw">{{$datos->fecha}}</td>
                <td class="text-white" scope="raw">{{$datos->accion}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
