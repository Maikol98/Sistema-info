@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR DATOS DEL CLIENTE</a>
    </nav>
<p></p>

<form action="{{route('Cliente.update',$cliente->IdCliente)}}" method="post">

    {!!method_field('PUT')!!}

    {!! csrf_field() !!}
    <div class="container">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="{{$cliente->Nombre}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" value="{{$cliente->Direccion}}" class="form-control">
            </div>
            <div class="form -group">
                <label for="">Telefono</label>
                <input type="text" name="telefono" value="{{$cliente->Telefono}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" name="correo" value="{{$cliente->Correo}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre Ciudad</label>
                <input type="text" name="Ciudad" value="{{$cliente->nombreCiudad}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nro Distrito</label>
                <input type="text" name="id_Distrito" value="{{$cliente->Nro_Distrito}}" class="form-control">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
        <a style="display:inline" class="btn btn-secondary" href="{{route('Cliente.index')}}">Volver</a>
    </form>
    <hr>
    @endsection

