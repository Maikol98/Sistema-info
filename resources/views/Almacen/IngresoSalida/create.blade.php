@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR INGRESO/SALIDA</a>
</nav>
<form action="{{route('Ingresosalida.store')}}" method="POST">
    {!! csrf_field() !!}
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Tipo (Ingreso/salida)</label>
                <input type="text" name="tipo" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">NUMERO DE ESTANTE</label>
                <input type="text" name="Nroestante" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Ingresosalida.index')}}">Volver</a>
    </div>
</form>
@endsection
