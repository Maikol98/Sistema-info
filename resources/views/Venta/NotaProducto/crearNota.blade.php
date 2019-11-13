@extends('layout')

@section('contenido')
    <h1>Registrar Detalle de Venta</h1>
    <hr>
<form action="{{route('DetalleVenta.store')}}" method="post">
    {!! csrf_field() !!}

    <p><label for="Id_Producto">
    Codigo Producto
    <input type="text" name="CodProducto">
    </label></p>

    <p><label for="Id_NotaVenta">
    Id Venta
    <input type="text" name="IdVenta">
    </label></p>

    <p><label for="Cantidad">
    Cantidad
    <input type="text" name="Cantidad">
    </label></p>

    <p><label for="PrecioUnitario">
    Precio Unitario
    <input type="text" name="Preciounitario">
    </label></p>

    <p><input type="submit" value="Enviar"></p>

</form>
@endsection
