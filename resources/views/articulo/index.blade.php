@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mt-3 mb-5">Crear</a>

<table id="articulos" class="table table-dark table-striped table-hover mt-4" style="width:100%">
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
    @foreach($articulos as $articulo)
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src =  "https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src = "https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script >
$(document).ready(function() {
    $('#articulos').DataTable({

        //Configuración de Paginacion del dataTables
        "lengthMenu":[[5,10,50], [5,10,50, "All"]]
    });
        
} );
</script>
@stop


