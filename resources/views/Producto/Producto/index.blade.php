@extends('layout')

@section('contenido')

    <h1>Todos los Productos</h1>
    <table width='80%' border="1">
        <thead>
            <th>Cod Producto</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Precio Promedio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </thead>

        <tbody>
            @foreach ($producto as $datosProducto)
            <tr>
            <td>{{$datosProducto->Cod_Producto}}</td>
            <td>{{$datosProducto->Nombre}}</td>
            <td>{{$datosProducto->Marca}}</td>
            <td>{{$datosProducto->Precio}}</td>
            <td>{{$datosProducto->PrecioPromedio}}</td>
            <td>{{$datosProducto->Stock}}</td>
            <td><a  href="{{route('Producto.edit',$datosProducto->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Producto.destroy', $datosProducto->Id)}}" method="post">
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
