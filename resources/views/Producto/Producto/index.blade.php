@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">TODOS LOS PRODUCTOS</a>
</nav>
    <P></P>
    <p><a class="btn btn-success" href="{{route('Producto.create')}}">Añadir Producto</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cod Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Precio Promedio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($producto as $datosProducto)
            <tr>
            <th scope="raw">{{$datosProducto->Cod_Producto}}</th>
            <td scope="raw">{{$datosProducto->Nombre}}</td>
            <td scope="raw">{{$datosProducto->Marca}}</td>
            <td scope="raw">{{$datosProducto->Precio}}</td>
            <td scope="raw">{{$datosProducto->PrecioPromedio}}</td>
            <td scope="raw">{{$datosProducto->Stock}}</td>
            <td scope="raw"><a class="btn btn-info" href="{{route('Producto.edit',$datosProducto->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Producto.destroy', $datosProducto->Id)}}" method="post">
                        {!!method_field('DELETE')!!}
                        {!!csrf_field()!!}
                        <button type="submit"class="btn btn-danger" >Elimnar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
