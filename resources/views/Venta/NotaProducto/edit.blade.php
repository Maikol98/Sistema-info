@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR DETALLE</a>
    </nav>
    <form action="{{route('Detalleventa.actualizar',[$detalleventa->Id_Producto, $detalleventa->Id_NotaVenta])}}" method="post">

         {!! csrf_field('PUT') !!}
        {!! csrf_field() !!}
         <div class="container">
            <div class="form-group">
                <label for="">Cantidad</label>
                <input type="text" name="cantidad" value="{{$detalleventa->Cantidad}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="text" name="Precio" value="{{$detalleventa->Precio}}" class="form-control">
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a class="btn btn-info" href="{{route('Notaventa.show',$detalleventa->Id_NotaVenta)}}" role="button">Volver</a>
    </form>
<br>

@endsection
