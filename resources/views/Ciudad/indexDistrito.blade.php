@extends('layout')

@section('contenido')

    <h1>Todos los Distritos</h1>
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
                <td><a  href="{{route('Distrito.edit',$datosDistrito->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Distrito.destroy', $datosDistrito->Id)}}" method="post">
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
