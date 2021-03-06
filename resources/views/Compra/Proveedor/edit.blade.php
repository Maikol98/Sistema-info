@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR PROVEEDOR</a>
</nav>
    <form action="{{route('Proveedor.update',$proveedor->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">

                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Nombre</label>
                    <input type="text" name="nombre" value="{{$proveedor->Nombre}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                         <label class="text-white" for="">Direccion</label>
                         <input type="text" name="direccion" value="{{$proveedor->Direccion}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Telefono</label>
                        <input type="text" name="telefono" value="{{$proveedor->Telefono}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Email</label>
                        <input type="text" name="email" value="{{$proveedor->Email}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Tipo</label>
                        <input type="text" name="tipo" value="{{$proveedor->Tipo}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar </button>
                <a style="display:inline" class="btn btn-secondary" href="{{route('Proveedor.index')}}">Volver</a>
        </div>
    </form>
    <br>
@endsection
