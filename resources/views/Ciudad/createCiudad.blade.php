@extends('layout')
@section('contenido')

<body bgcolor="red"></body>

<h1>Registrar Ciudad</h1>

<form action="RegCiudad" method="post">
    <p><label for="Nombre">
        Nombre Ciudad
        <input type="text" name="Nombre">
    </label></p>
    <input type="submit" value="Enviar">
</form>

<p></p>
<hr>
<p></p>

<h1>Registrar Distrito</h1>

<form action="RegDistrito" method="post">
    <p><label for="NroDistrito">
        Nro Distrito
            <input type="text" name="NroDistrito">
    </label>
    </p>
    <p><label for="Nombre">
        Nombre
            <input type="text" name="Nombre">
    </label></p>
    <p><label for="CodCiudad">
        Codigo Ciudad
            <input type="text" name="CodCiudad">
    </label></p>
    <input type="submit" value="Enviar">
</form>
@endsection

