@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR PRODUCTO</a>
    </nav>
    <p></p>
    <form action="{{route('Producto.store')}}" method="POST">
        {!! csrf_field() !!}
        <div class="container">
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Codigo Producto</label>
                    <input type="text" name="Codigo" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Nombre</label>
                    <input type="text" name="Nombre" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Marca</label>
                    <input type="text" name="Marca" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Precio</label>
                    <input type="text" name="Precio" class="form-control">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
            <a class="btn btn-secondary" href="{{route('Producto.index')}}">Volver</a>
        </div>
    </form>
@endsection
