@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS DISTRITOS</a>
    </nav>
    <p></p>
    <table width="50%" border="1">
        <thead>
            <th>Nro Distrito</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($distrito as $datosDistrito)
                <tr>
                <td>{{$datosDistrito->Nro_Distrito}}</td>
                <td>{{$datosDistrito->Nombre}}</td>
                <td>{{$datosDistrito->ciudad}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{route('Distrito.edit',$datosDistrito->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Distrito.destroy', $datosDistrito->Id)}}" method="post">
                        {!!method_field('DELETE')!!}
                        {!!csrf_field()!!}
                        <button type="submit" class="btn btn-danger btn-sm">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p></p>
    <a class="btn btn-primary btn-sm" href="{{route('Ciudad.index')}}">Volver</a>
@endsection
