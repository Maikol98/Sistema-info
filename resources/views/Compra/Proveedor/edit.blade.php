@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR PROVEEDOR</a>
</nav>
    <form action="{{route('Proveedor.update',$proveedor->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">
                <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                         <label for="">Direccion</label>
                         <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Tipo</label>
                        <input type="text" name="tipo" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection