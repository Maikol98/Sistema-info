@extends('layout')

@section('contenido')
    <h1>Editar Detalle de Venta</h1>
    <hr>
<form action="{{route('DetalleVenta.update')}}" method="post">

    {!! csrf_field('PUT') !!}
    {!! csrf_field() !!}

    <p><label for="Id_Producto">
    Codigo Producto
    <input type="text" name="CodProducto" value="{{$nota->Id_Producto}}">
    </label></p>

    <p><label for="Cantidad">
    Cantidad
    <input type="text" name="Cantidad" value="{{$nota->Cantidad}}">
    </label></p>

    <p><label for="PrecioUnitario" value="{{$nota->PrecioUnitario}}">
    Precio Unitario
    <input type="text" name="Preciounitario">
    </label></p>

    <p><input type="submit" value="Enviar"></p>

</form>
@endsection
