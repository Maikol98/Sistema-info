@extends('layout')

@section('contenido')
<h1>Registrar Cliente</h1>

<form action="{{route('Cliente.store')}}" method="post">

        {!!csrf_field()!!}

   <p><label for="CiCleinte">
        CiCliente
            <input type="text" name="CiCliente">
    </label></p>

    <p><label for="nombre">
        Nombre
        <input type="text" name="nombre">
    </label></p>

    <p><label for="direccion">
            Direccion
            <input type="text" name="direccion">
        </label></p>

    <p><label for="telefono">
            Telefono
            <input type="text" name="telefono">
        </label></p>

    <p><label for="correo">
            Correo
            <input type="text" name="correo">
        </label></p>

    <p><label for="Ciudad">
        Nombre Ciudad
         <input type="text" name="Ciudad">
    </label></p>

    <p><label for="id_Distrito">
        Nro Distrito
         <input type="text" name="id_Distrito">
    </label></p>
    <input type="submit" value="Enviar">
</form>
<hr>
@endsection
