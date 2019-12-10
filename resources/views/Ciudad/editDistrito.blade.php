@extends('layout')
@section('contenido')


<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR DISTRITO</a>
    </nav>
<p></p>

<form action="{{route('Distrito.update',$distrito->Id)}}" method="post">

    {!!method_field('PUT')!!}
    {!! csrf_field() !!}

    <div class="container">
            <div class="form-row">
             <div class="col-md-2 mb-2">
                <label class="text-white" for="">Nro Distrito</label>
                <input type="text" name="NroDistrito" value={{"$distrito->Nro_Distrito"}} class="form-control">
             </div>

             <div class="col-md-2 mb-2">
                <label class="text-white" for="">Id Ciudad</label>
                <input type="text" name="Ciudad" value={{"$distrito->Id_Ciudad"}} class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-2">
                    <label class="text-white" for="">Nombre</label>
                    <input type="text" name="Nombre" value={{"$distrito->Nombre"}} class="form-control">
                </div>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a style="display:inline" class="btn btn-secondary" href="{{route('Distrito.show',$distrito->Id_Ciudad)}}">Volver</a>
    </div>
</form>
@endsection
