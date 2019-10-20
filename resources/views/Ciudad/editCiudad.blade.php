@extends('layout')
@section('contenido')


<h1>Registrar Ciudad</h1>

<form action="{{route('Ciudad.update',$ciudad->Id)}}" method="post">

    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

    <p><label for="Nombre">
        Nombre Ciudad
        <input type="text" name="Nombre" value="{{$ciudad->Nombre}}">
    </label></p>
    <input type="submit" value="Enviar">
</form>
<p></p>
<hr>

@endsection
