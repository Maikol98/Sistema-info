@extends('layout')

@section('contenido')

    <h1>Registrar Producto</h1>

<form action="{{route('Producto.store')}}" method="POST">

    {!! csrf_field() !!}

    <p><label for="Cod_producto">
        Codigo Producto
        <input type="text" name="Codigo">
    </label></p>


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



    <p><label for="Id_Garantia">
            Id Garantia
            <input type="text" name="IdGarantia">
        </label></p>

    <input type="submit" value="Enviar">

</form>

<hr>

@endsection
