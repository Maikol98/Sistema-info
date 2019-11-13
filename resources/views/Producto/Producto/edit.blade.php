@extends('layout')

@section('contenido')

    <h1>Editar Producto</h1>

<form action="{{route('Producto.update',$producto->Id)}}" method="POST">

    {!! csrf_field('PUT')!!}
    {!! csrf_field() !!}



    <p><label for="Nombre">
            Nombre
        <input type="text" name="Nombre">
    </label></p>


    <p><label for="Marca">
        Marca
        <input type="text" name="Marca">
    </label></p>


    <p><label for="Precio">
            Precio
            <input type="text" name="Precio">
    </label></p>


    <input type="submit" value="Enviar">

</form>

<hr>

@endsection
