@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR DETALLE</a>
    </nav>
    <form action="{{route('DetalleVenta.actualizar',[$detalleventa->Id_Producto, $detalleventa->Id_NotaVenta])}}" method="post">
        {!!method_field('PUT')!!}
        {!! csrf_field() !!}
         <div class="container">
            <div class="col-md-6 mb-2">
                <label  class="text-white" for="">Cantidad</label>
                <input type="text" name="cantidad" value="{{$detalleventa->Cantidad}}" class="form-control">
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a class="btn btn-info" href="{{route('Notaventa.show',$detalleventa->Id_NotaVenta)}}" role="button">Volver</a>
    </form>
@endsection
