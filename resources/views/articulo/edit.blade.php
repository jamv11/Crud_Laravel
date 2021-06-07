@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR</h1>
@stop

@section('content')
<br>
    <br>
    <h2>Editar Registro</h2>

    <form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <br>
        <div class="">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
        </div>
        <div class="">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
        </div>
        <div class="">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control"value="{{$articulo->cantidad}}">
        </div>
        <div class="">
        <label for="" class="form-label">Precio</label>
        <input id="precio"name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}">
        </div>
        <br>
        <br>
        <a href="/articulos" class="btn btn-secondary" tablaindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop