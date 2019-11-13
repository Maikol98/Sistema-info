@extends('layout')
@section('contenido')


<h1>Registrar Distrito</h1>

<form action="{{route('Distrito.store',$ciudad->Id)}}" method="post">

    {!! csrf_field() !!}

    <p><label for="NroDistrito">
        Nro Distrito
            <input type="text" name="NroDistrito">
    </label>
    </p>
    <p><label for="Nombre">
        Nombre
            <input type="text" name="Nombre">
    </label></p>
    <p><label for="CodCiudad">
        Codigo Ciudad
    <input type="text" name="CodCiudad" value="{{$ciudad->Id}}">
    </label></p>
    <input type="submit" value="Enviar">
</form>
@endsection
