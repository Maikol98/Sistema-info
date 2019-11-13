@extends('layout')

@section('contenido')
    <h1>Registrar Ventas</h1>
    <hr>
    <form action="{{route('Notaventa.store')}}" method="POST">
        {!! csrf_field() !!}
    <p><label for="Id_Cliente">
    CI Cliente
    <input type="text" name="CiCliente">
    </label></p>

    <p><label for="Cod_Admin">
    Codigo Administrador
    <input type="text" name="CodAdmin">
    </label></p>

    <p><input type="submit" value="Enviar"></p>
    </form>

    <hr>

@endsection
