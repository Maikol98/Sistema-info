@extends('layout')
@section('contenido')


<h1>Registrar Distrito</h1>

<form action="{{route('Distrito.update',$distrito->Id)}}" method="post">

<!--   ESTO ES PARA GENERAR LA RUTA 'PUT' YA QUE SOLO HAY 'GET' Y 'POST' EN LARAVEL -->
    {!!method()_field('PUT')!!}

<!--   ESTO ES PARA VALIDAR EL FORMULARIO -->
    {!! csrf_field() !!}

    <p><label for="NroDistrito">
        Nro Distrito
            <input type="text" name="NroDistrito" value={{"$distrito->Nro_Distrito"}}>
    </label>
    </p>
    <p><label for="Nombre">
        Nombre
            <input type="text" name="Nombre" value={{"$distrito->Nombre"}}>
    </label></p>
    <input type="submit" value="Enviar">
</form>
@endsection
