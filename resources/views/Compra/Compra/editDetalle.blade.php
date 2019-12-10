@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">EDITAR DETALLE</a>
</nav>
    <form action="{{route('DetalleCompra.actualizar',[$detallecompra->Id_Producto, $detallecompra->Id_Compra])}}" method="POST">
        {!!method_field('PUT')!!}
        {!! csrf_field() !!}
        <div class="container">
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Cantidad</label>
                    <input type="text" name="cantidad" value="{{$detallecompra->Cantidad}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Precio</label>
                    <input type="text" name="Precio" value="{{$detallecompra->Precio}}" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a class="btn btn-info" href="{{route('NotaCompra.show',$detallecompra->Id_Compra)}}" role="button">Volver</a>
        </div>
    </form>
@endsection
