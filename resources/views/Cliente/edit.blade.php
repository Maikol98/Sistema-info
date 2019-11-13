@extends('layout')

@section('contenido')
<h1>Editar Cliente</h1>

<form action="{{route('Cliente.update',$cliente->Id)}}" method="post">

    {!!method_field('PUT')!!}

    {!! csrf_field() !!}

   <p><label for="CiCleinte">
        CiCliente
   <input type="text" name="CiCliente" value="{{$cliente->Ci_Cliente}}">
    </label></p>

    <p><label for="nombre">
        Nombre
        <input type="text" name="nombre" value="{{$cliente->Nombre}}">
    </label></p>

    <p><label for="direccion">
            Direccion
            <input type="text" name="direccion" value="{{$cliente->Direccion}}">
        </label></p>

    <p><label for="telefono">
            Telefono
            <input type="text" name="telefono" value="{{$cliente->Telefono}}">
        </label></p>

    <p><label for="correo">
            Correo
            <input type="text" name="correo" value="{{$cliente->Correo}}">
        </label></p>

    <p><label for="id_Distrito">
        IdDistrito
         <input type="text" name="id_Distrito" value="{{$cliente->Id_Distrito}}">
    </label></p>
    <input type="submit" value="Enviar">
</form>
<hr>
@endsection
