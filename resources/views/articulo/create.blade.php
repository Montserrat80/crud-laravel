@extends('adminlte::page')

@section('title', 'CRUD amb Laravel 8')

@section('content_header')
    <h1>New product</h1>
@stop

@section('content')
    <form action="/articulos" method="POST">
         @csrf
        <div class="mb-3">
            <label for="" class="form-label">Code</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Amount</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4">
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