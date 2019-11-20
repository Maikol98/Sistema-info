@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CLIENTE</a>
</nav>

<form action="{{route('Cliente.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-group">
            <label for="">Ci Cliente</label>
            <input type="text" name="CiCliente" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="form -group">
            <label for="">Telefono</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input type="text" name="correo" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre Ciudad</label>
            <input type="text" name="Ciudad" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nro Distrito</label>
            <input type="text" name="id_Distrito" class="form-control">
        </div>
    </div>
    <input type="submit" value="Enviar">
</form>
<hr>
@endsection
