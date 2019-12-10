@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS DISTRITOS</a>
    </nav>
    <p></p>
    <table class="table">
        <thead class="thead-dark">
            <th>Nro Distrito</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($distrito as $datosDistrito)
                <tr>
                <td class="text-white">{{$datosDistrito->Nro_Distrito}}</td>
                <td class="text-white">{{$datosDistrito->Nombre}}</td>
                <td class="text-white">{{$datosDistrito->ciudad}}</td>
                <td class="text-white"><a class="btn btn-primary" href="{{route('Distrito.edit',$datosDistrito->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Distrito.destroy', $datosDistrito->Id)}}" method="post">
                        {!!method_field('DELETE')!!}
                        {!!csrf_field()!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p></p>
    <a class="btn btn-primary " href="{{route('Ciudad.index')}}">Volver</a>
@endsection
