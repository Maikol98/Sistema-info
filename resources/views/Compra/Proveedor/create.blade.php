@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR PROVEEDOR</a>
</nav>
    <form action="{{route('Proveedor.store')}}" method="POST">

        {!! csrf_field() !!}

        <div class="container">
            <div class="form-row">
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
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
                        <label class="text-white" for="">Email</label>
                        <input type="text" name="email" class="form-control">
                </div>
            </div>
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                            <label class="text-white" for="">Codigo</label>
                            <input type="text" name="codigo" class="form-control">
                    </div>
                    <div class="col-md-3 mb-2">
                            <label class="text-white" for="">Tipo</label>
                            <input type="text" name="tipo" class="form-control">
                    </div>
                </div>
               <button type="submit" class="btn btn-primary">Guardar </button>
               <a style="display:inline" class="btn btn-secondary" href="{{route('Proveedor.index')}}">Volver</a>

        </div>

    </form>
@endsection
