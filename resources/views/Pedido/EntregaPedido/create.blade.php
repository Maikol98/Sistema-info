@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR ENTREGA</a>
</nav>

<form action="{{route('EntregaPedido.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label class="text-white" for="">Ci Chofer</label>
            <input type="text" name="CiChofer" class="form-control">
        </div>
        <div class="form -group">
                <label class="text-white" for="">Placa Vehiculo</label>
                <input type="text" name="placa" class="form-control">
            </div>
            <p></p>
            <input type="submit" class="btn btn-primary" value="Enviar">
            <a style="display:inline" class="btn btn-secondary" href="{{route('EntregaPedido.index')}}">Volver</a>
    </div>
</form>
<hr>
@endsection
