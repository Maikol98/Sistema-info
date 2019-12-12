@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DEVOLUCION</a>
    </nav>
    <p></p>
    <form action="{{route('Devolucion.store')}}" method="POST">
        {!! csrf_field() !!}
        <div class="container">
                <div class="form-row">
                    <div class="col md-4 mb-2">
                            <label class="text-white"  for="">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control">
                    </div>
                </div>

                <div  class="form-row">
                        <div class="col md-10 mb-2">
                            <label class="text-white" for="">Cantidad</label>
                            <input type="text" name="cantidad" class="form-control">
                        </div>

                        <div class="col md-1 mb-2">
                            <label class="text-white"  for="">Nro Detalle Pedido</label>
                            <input type="text" name="iddetalle" value="{{$dato}}" class="form-control">
                        </div>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Guardar </button>
        </div>

    </form>
    <br>
@endsection
