@extends('layout')
@section('contenido')


<h1>Registrar Ciudad</h1>

<form action="{{route('Ciudad.store')}}" method="post">

    {!!csrf_field()!!}

    <p><label for="Nombre">
        Nombre Ciudad
        <input type="text" name="Nombre">
    </label></p>
    <input type="submit" value="Enviar">
</form>

<p></p>
<hr>
@endsection

