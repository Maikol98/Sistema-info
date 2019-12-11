@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DETALLE DE PEDIDO</a>
    </nav>
    <form action="{{route('Detallepedido.store',$dato)}}" method="post">

        {!! csrf_field() !!}

        <div class="container">
            <div class="form-row">
                <div class="col-md-3">
                    <label class="text-white" for="">Nro Pedido</label>
                    <input type="text" name="pedido" value="{{$dato}}" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="text-white" for="">Codigo Producto</label>
                    <input type="text" name="Codigo" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label class="text-white" for="">Descipcion(opcional)</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">
                    <label class="text-white" for="">Cantidad</label>
                    <input type="text" name="cantidad" class="form-control">
                </div>
                <div class="col-md-4 mb-2">
                    <label class="text-white" for="">Fecha limite para devolucion</label>
                    <input type="text" name="fecha" placeholder="Año/Mes/Dia" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg">Guardar </button>
            <a class="btn btn-primary btn-lg" href="<?php echo route('Pedido.index')?>" role="button">lista de Pedidos</a>
        </div>
    </form>
@endsection
