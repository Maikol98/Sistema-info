@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR VEHICULO</a>
</nav>

<form action="{{route('Vehiculo.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Placa</label>
            <input type="text" name="placa" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="modelo" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Color</label>
                <input type="text" name="color" class="form-control">
            </div>
        <div class="form -group">
                <label for="">Capacidad</label>
                <input type="text" name="capacidad" class="form-control">
            </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
    <a style="display:inline" class="btn btn-secondary" href="{{route('Vehiculo.index')}}">Volver</a>
</form>
<hr>
@endsection
