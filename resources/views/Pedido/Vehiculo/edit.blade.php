@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">EDITAR DATOS DEL VEHICULO</a>
</nav>

<form action="{{route('Vehiculo.update',$vehiculo->Placa)}}" method="post">
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="modelo" value="{{$vehiculo->Modelo}}" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Color</label>
                <input type="text" name="color" value="{{$vehiculo->Color}}" class="form-control">
            </div>
        <div class="form -group">
                <label for="">Capacidad</label>
                <input type="text" name="capacidad" value="{{$vehiculo->Capacidad}}" class="form-control">
            </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
    <a style="display:inline" class="btn btn-secondary" href="{{route('Vehiculo.index')}}">Volver</a>
</form>
<hr>
@endsection
