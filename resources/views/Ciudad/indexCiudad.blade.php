@extends('layout')

@section('contenido')

    <h1>Todos las Ciudades</h1>
    <table width="50%" border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Añadir</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($ciudad as $datosCiudad)
                <tr>
                <td>{{$datosCiudad->Id}}</td>
                <td>{{$datosCiudad->Nombre}}</td>
                <td><a  href="{{route('Ciudad.show',$datosCiudad->Id)}}">Añadir Distrito</a></td>
                <td><a  href="{{route('Ciudad.edit',$datosCiudad->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Ciudad.destroy', $datosCiudad->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
