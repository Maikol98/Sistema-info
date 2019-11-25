@extends('layout')

@section('contenido')
        <nav class="navbar navbar-dark bg-primary">
            <a href="" class="navbar-brand">TODOS LOS ALMACEN</a>
        </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Almacen.create')}}">Añadir Almacen</a></p>
        <table whidth='100%' border="2">
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
                    <td>{{$datosDelAlmacen->Id}}</td>
                    <td>{{$datosDelAlmacen->Dimension}}</td>
                    <td>{{$datosDelAlmacen->Capacidad}}</td>
                    <td>{{$datosDelAlmacen->Direccion}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('Almacen.edit',$datosDelAlmacen->Id)}}">Editar</a>
                        <a style="display:inline" class="btn btn-info btn-sm" href="{{route('Almacen.show',$datosDelAlmacen->Id)}}">Ver Estantes</a>
                        <form style="display:inline" action="{{route('Almacen.destroy', $datosDelAlmacen->Id)}}" method="post">
                            {!!csrf_field()!!}
                            {!!method_field('DELETE')!!}
                            <button type="submit" class="btn btn-danger btn-sm">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
