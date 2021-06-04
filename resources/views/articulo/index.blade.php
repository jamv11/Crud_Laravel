@extends('layouts.PlantillaBase')

@section('contenido')

<a href="articulos/create" class="btn btn-primary mt-5">Crear</a>

<table class="table table-dark table-striped table-hover mt-4">
 <thead>
    <tr>
        <th>ID</th>
        <th>Código</th>
        <th>Descripción</th>
        <th>cantidad</th>
        <th>precio</th>
        <th>Acciones</th>
    </tr>
 </thead>
<tbody>
    @foreach($articulos as $articulo);
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>

                <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>

@endsection