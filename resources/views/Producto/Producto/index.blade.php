@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">TODOS LOS PRODUCTOS</a>
</nav>
    <P></P>
    <p><a class="btn btn-success" href="{{route('Producto.create')}}">Añadir Producto</a></p>

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
            <td><a class="btn btn-info btn-sm" href="{{route('Producto.edit',$datosProducto->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Producto.destroy', $datosProducto->Id)}}" method="post">
                        {!!method_field('DELETE')!!}
                        {!!csrf_field()!!}
                        <button type="submit"class="btn btn-danger btn-sm" >Elimnar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
