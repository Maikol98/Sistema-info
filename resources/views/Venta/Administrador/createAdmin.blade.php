@extends('layout')

@section('contenido')
<h1>Registrar Administrador</h1>

<form action="{{route('Administrador.store')}}" method="post">

   <p><label for="CodAdmin">
        CiCliente
            <input type="text" name="CodAdmin">
    </label></p>

    <p><label for="nombre">
        Nombre
        <input type="text" name="nombre">
    </label></p>

    <p><label for="telefono">
            Telefono
            <input type="text" name="telefono">
        </label></p>

    <p><label for="email">
            Correo
            <input type="text" name="email">
        </label></p>

    <input type="submit" value="Enviar">
</form>
<hr>
@endsection
