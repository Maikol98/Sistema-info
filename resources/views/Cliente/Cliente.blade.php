@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CLIENTE</a>
</nav>

<form action="{{route('Cliente.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Ci Cliente</label>
                <input type="text" name="CiCliente" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Nombre</label>
                <input style="display:inline" type="text" name="nombre" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Direccion</label>
                <input type="text" name="direccion" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Telefono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Correo</label>
                <input type="text" name="correo" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-2">
               <label class="text-white" for="">Nombre Ciudad</label>
              <input type="text" name="Ciudad" class="form-control">
            </div>
            <div class="row-md-4 mb-2">
                <label class="text-white" for="">Nro Distrito</label>
                <input type="text" name="id_Distrito" class="form-control">
            </div>
        </div>
        <p></p>
        <input type="submit" class="btn btn-primary" value="Enviar">
        <a style="display:inline" class="btn btn-secondary" href="{{route('Cliente.index')}}">Volver</a>
        <a style="display:inline" class="btn btn-success" href="/">HOME</a>
    </div>
</form>
@endsection
