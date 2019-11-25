@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">EDITAR DATOS DEL CHOFER</a>
</nav>

<form action="{{route('Chofer.update',$chofer->Id)}}" method="post">
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{{$chofer->Nombre}}" class="form-control">
        </div>
        <div class="form -group">
                <label for="">Telefono</label>
                <input type="text" name="telefono" value="{{$chofer->Telefono}}" class="form-control">
            </div>
        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" name="direccion" value="{{$chofer->Direccion}}" class="form-control">
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
    <a style="display:inline" class="btn btn-secondary" href="{{route('Chofer.index')}}">Volver</a>
</form>
<hr>
@endsection
