@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS ALMACEN</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Cod Almacen</th>
                    <th> Dimension</th>
                    <th>Capacidad</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </thead>
        <tbody>
                @foreach ($almacen as $datosDelAlmacen)
                <tr>
                    <td>{{$datosDelAlmacen->Cod_Almacen}}</td>
                    <td>{{$datosDelAlmacen->Dimension}}</td>
                    <td>{{$datosDelAlmacen->Capacidad}}</td>
                    <td>{{$datosDelAlmacen->Direccion}}</td>
                    <td><a  href="{{route('Almacen.edit',$datosDelAlmacen->Id)}}">Editar</a>
                        <form style="display:inline" action="{{route('Almacen.destroy', $datosDelAlmacen->Id)}}" method="post">
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
