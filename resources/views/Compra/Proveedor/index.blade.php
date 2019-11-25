@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS PROVEEDORES</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="#CARNET" aria-label="Search">
          <a class="btn btn-secondary my-2 my-sm-0" href="">Buscar</a>
        </form>
      </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Proveedor.create')}}">Añadir Proveedor</a></p>

    <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cod Proveedor</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedor as $datos)
                    <tr>
                     <th scope="raw">{{$datos->Cod_Proveedor}}</th>
                     <td>{{$datos->Nombre}}</td>
                     <td>{{$datos->Direccion}}</td>
                     <td>{{$datos->Telefono}}</td>
                     <td>{{$datos->Email}}</td>ç
                     <td>{{$datos->Tipo}}</td>
                     <td><a class="btn btn-primary" href="{{route('Proveedor.edit',$datos->Id)}}">Editar</a>
                     <form style="display:inline" action="{{route('Proveedor.destroy', $datos->Id)}}" method="post">
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
