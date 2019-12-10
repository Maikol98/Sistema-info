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
            <div class="form-row">
            <div class="col-md-6 mb-2">>
                <label class="text-white" for="">Nombre</label>
                <input type="text" name="nombre" value="{{$cliente->Nombre}}" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-2">>
                <label class="text-white" for="">Direccion</label>
                <input type="text" name="direccion" value="{{$cliente->Direccion}}" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-2">>
                <label class="text-white" for="">Telefono</label>
                <input type="text" name="telefono" value="{{$cliente->Telefono}}" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-2">>
                <label class="text-white" for="">Correo</label>
                <input type="text" name="correo" value="{{$cliente->Correo}}" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-2">>
                <label class="text-white" for="">Nombre Ciudad</label>
                <input type="text" name="Ciudad" value="{{$cliente->nombreCiudad}}" class="form-control">
            </div>
            <div class="col-md-2 mb-2">>
                <label class="text-white" for="">Nro Distrito</label>
                <input type="text" name="id_Distrito" value="{{$cliente->Nro_Distrito}}" class="form-control">
            </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
            <a style="display:inline" class="btn btn-secondary" href="{{route('Cliente.index')}}">Volver</a>
        </div>
    </form>
    <hr>
    @endsection

