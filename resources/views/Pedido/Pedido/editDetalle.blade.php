@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR DETALLE PEDIDO</a>
    </nav>
    <form action="{{route('Detallepedido.update',[$detalle->Id_Pedido, $detalle->Id_Producto])}}" method="post">

        {!!method_field('PUT')!!}
        {!! csrf_field() !!}

         <div class="container">
             <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Cantidad</label>
                    <input type="text" name="cantidad" value="{{$detalle->Cantidad}}" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Descripcion</label>
                    <input type="text" name="descripcion" value="{{$detalle->Descripcion}}" class="form-control">
                </div>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary btn-lg">Guardar </button>
            <a class="btn btn-info btn-lg" href="{{route('Pedido.show',$detalle->Id_Pedido)}}" role="button">Volver</a>
        </div>
    </form>

@endsection
