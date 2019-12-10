@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR COMPRA</a>
</nav>
    <form action="{{route('NotaCompra.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
            <div class="form-row">
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Codigo Proveedor</label>
                        <input type="text" name="Codigo" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a style="display:inline" class="btn btn-secondary" href="{{route('NotaCompra.index')}}">Volver</a>
        </div>
    </form>
@endsection
