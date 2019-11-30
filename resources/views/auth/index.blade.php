@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS USUARIOS</a>
    </nav>
    <p></p>
    <table width="50%" border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Roles</th>
        </thead>
        <tbody>
            @foreach ($users as $datos)
                <tr>
                <td>{{$datos->id}}</td>
                <td>{{$datos->nombre}}</td>
                <td>{{$datos->email}}</td>
                <td>{{$datos->role}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
