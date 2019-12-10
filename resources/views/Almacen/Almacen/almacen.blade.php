@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR ALMACEN</a>
    </nav>
<p></p>
    <form action="{{route('Almacen.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="form-row">
                    <div class="col md-6 mb-2">
                            <label class="text-white"  for="">Direccion</label>
                            <input type="text" name="Direccion" class="form-control">
                    </div>
                </div>

                <div  class="form-row">

                            <div class="col md-1 mb-2">
                                    <label class="text-white" for="">Dimension</label>
                                    <input type="text" name="Dimension" class="form-control">
                            </div>

                            <div class="col md-1 mb-2">
                                <label class="text-white"  for="">Capacidad</label>
                                <input type="text" name="Capacidad" class="form-control">
                            </div>
                </div>
                
                <p></p>
                <button type="submit" class="btn btn-primary">Guardar </button>
                <a style="display:inline" class="btn btn-success" href="{{route('Almacen.index')}}">Listado de Almacen</a>
        </div>

    </form>
    <br>
@endsection
