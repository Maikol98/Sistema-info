@extends('layout')

@section('contenido')
        <nav class="navbar navbar-dark bg-primary">
            <a href="" class="navbar-brand">TODOS LOS ALMACENES</a>
        </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Almacen.create')}}">Añadir Almacen</a></p>
        <div class="text-center">


        <table class="table">
                <thead  class="thead-dark">
                    <th>Cod Almacen</th>
                    <th> Dimension</th>
                    <th>Capacidad</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </thead>
        <tbody>
                @foreach ($almacen as $datosDelAlmacen)
                <tr>
                    <td class="text-white">{{$datosDelAlmacen->Id}}</td>
                    <td class="text-white">{{$datosDelAlmacen->Dimension}}</td>
                    <td class="text-white">{{$datosDelAlmacen->Capacidad}}</td>
                    <td class="text-white">{{$datosDelAlmacen->Direccion}}</td>
                    <td ><a class="btn btn-primary " href="{{route('Almacen.edit',$datosDelAlmacen->Id)}}">Editar</a>
                        <a style="display:inline" class="btn btn-info " href="{{route('Almacen.show',$datosDelAlmacen->Id)}}">Ver Estantes</a>
                        <form style="display:inline" action="{{route('Almacen.destroy', $datosDelAlmacen->Id)}}" method="post">
                            {!!csrf_field()!!}
                            {!!method_field('DELETE')!!}
                            <button type="submit" class="btn btn-danger ">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
</div>
@endsection
