@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR PEDIDO</a>
</nav>

<form action="{{route('Pedido.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Ci Cliente</label>
            <input type="text" name="CiCliente" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Fecha de Entrega</label>
            <input type="text" name="fechaentrega" placeholder="Año/Mes/Dia" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="form -group">
            <label for="">Descripcion de la Direccion(opcional)</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <p></p>
    <input type="submit" class="btn btn-primary" value="Enviar">
    <a style="display:inline" class="btn btn-secondary" href="{{route('Pedido.index')}}">Volver</a>
    </div>
</form>
<hr>
@endsection
