@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS CIUDADES</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Ciudad.create')}}">Añadir Ciudad</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Añadir</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ciudad as $datosCiudad)
                <tr>
                <th class="text-white">{{$datosCiudad->Id}}</th>
                <td class="text-white">{{$datosCiudad->Nombre}}</td>
                <td class="text-white"><a class="btn btn-success" href="{{route('Ciudad.show',$datosCiudad->Id)}}">Añadir Distrito</a></td>
                <td class="text-white"><a class="btn btn-primary" href="{{route('Ciudad.edit',$datosCiudad->Id)}}">Editar</a>
                    <a style="display:inline" class="btn btn-success " href="{{route('Distrito.show',$datosCiudad->Id)}}">Distrito</a>
                    <form style="display:inline" action="{{route('Ciudad.destroy', $datosCiudad->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
