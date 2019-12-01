@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DETALLE DE PEDIDO</a>
    </nav>
    <form action="{{route('Detallepedido.store',$dato)}}" method="post">

         {!! csrf_field() !!}

         <div class="container">
                <div class="form-group">
                        <label for="">Nro Pedido</label>
                        <input type="text" name="pedido" value="{{$dato}}" class="form-control">
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
                    <label for="">Descipcion(opcional)</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-success">Guardar </button>
        <a class="btn btn-primary" href="<?php echo route('Pedido.index')?>" role="button">lista de Pedidos</a>
    </form>
@endsection
