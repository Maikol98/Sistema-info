@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DETALLE DE VENTA</a>
    </nav>
    <form action="{{route('DetalleVenta.store',$dato)}}" method="post">

         {!! csrf_field() !!}

         <div class="container">
                <div class="form-group">
                        <label for="">Nro Nota</label>
                        <input type="text" name="nota" value="{{$dato}}" class="form-control">
                    </div>
                <div class="form-group">
                        <label for="">Codigo Producto</label>
                        <input type="text" name="Codigo" class="form-control">
                    </div>
                <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" name="Precio" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-success">Guardar </button>
        <a class="btn btn-primary" href="<?php echo route('Notaventa.index')?>" role="button">lista de compras</a>
    </form>
@endsection
