@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CHOFER</a>
</nav>

<form action="{{route('Chofer.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Ci Chofer</label>
            <input type="text" name="Ci" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form -group">
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control">
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
    <a style="display:inline" class="btn btn-secondary" href="{{route('Chofer.index')}}">Volver</a>
</form>
<hr>
@endsection
