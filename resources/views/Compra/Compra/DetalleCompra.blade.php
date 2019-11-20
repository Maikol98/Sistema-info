@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR DETALLE</a>
</nav>
    <form action="{{route('DetalleCompra.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label for="">Nro Nota</label>
                        <input type="text" name="nota" class="form-control">
                    </div>
                <div class="form-group">
                        <label for="">Codigo Producto</label>
                        <input type="text" name="Codigo" class="form-control">
                    </div>
                <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection
