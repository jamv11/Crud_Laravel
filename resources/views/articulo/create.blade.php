@extends('layouts.PlantillaBase')



@section('contenido')
<br>
    <br>
    <h2>Crear Registro</h2>

    <form action="/articulos" method="POST">
    <br>
    <br>
    @csrf
        <div class="">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control">
        </div>
        <div class="">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control">
        </div>
        <div class="">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control">
        </div>
        <div class="">
        <label for="" class="form-label">Precio</label>
        <input id="precio"name="precio" type="number" step="any" value="0.00" class="form-control">
        </div>
        <br>
        <br>
        <a href="/articulos" class="btn btn-secondary" tablaindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection