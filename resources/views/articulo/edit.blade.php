@extends('adminlte::page')

@section('title', 'CRUD amb Laravel 8')

@section('content_header')
    <h1>Edit product</h1>
@stop

@section('content')
    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Code</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Amount</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input id="precio" name="precio" type="number" step="any"  class="form-control" value="{{$articulo->precio}}">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancel</a>
        <button type="submit "class="btn btn-primary">Save</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop