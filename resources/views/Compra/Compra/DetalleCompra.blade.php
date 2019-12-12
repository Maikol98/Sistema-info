@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR DETALLE</a>
</nav>
@if ($errors->any())
<div class="alert alert-danger">
   @foreach ($errors->all() as $errorActual)
       <ul>
            <li>{{$errorActual}}</li>
       </ul>
       @endforeach
    </div>
@endif
    <form action="{{route('DetalleCompra.store',$dato)}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Codigo Producto</label>
                    <input type="text" name="Codigo" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Nro Nota</label>
                    <input type="text" name="nota" value="{{$dato}}" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Cantidad</label>
                    <input type="text" name="cantidad" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Precio</label>
                    <input type="text" name="Precio" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar </button>
            <a class="btn btn-primary" href="<?php echo route('NotaCompra.index')?>" role="button">lista de compras</a>
        </div>
    </form>
@endsection
