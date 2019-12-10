@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR PEDIDO</a>
</nav>
<p></p>
<form action="{{route('Pedido.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-row">
            <div class="col-md-4">
                <label class="text-white" for="">Ci Cliente</label>
                <input type="text" name="CiCliente" class="form-control">
            </div>
            <div class="col-md-4 mb-2">
                <label class="text-white" for="">Fecha de Entrega</label>
                <input type="text" name="fechaentrega" placeholder="Año/Mes/Dia" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-2">
                <label class="text-white" for="">Direccion</label>
                <input type="text" name="direccion" class="form-control">
            </div>
            <div class="col-md-4 mb-2">
                <label class="text-white" for="">Descripcion de la Direccion(opcional)</label>
                <input type="text" name="descripcion" class="form-control">
            </div>
        </div>
        <p></p>
        <input type="submit" class="btn btn-primary btn-lg" value="Enviar">
        <a style="display:inline" class="btn btn-secondary btn-lg" href="{{route('Pedido.index')}}">Volver</a>
    </div>
</form>
@endsection
