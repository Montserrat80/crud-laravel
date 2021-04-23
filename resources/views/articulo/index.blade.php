@extends('adminlte::page')

@section('title', 'CRUD amb Laravel 8')

@section('content_header')
    <h1>List of products</h1>
@stop

@section('content')
    <a href="articulos/create" class="btn btn-primary mb-3">New</a>
    <!--<table  class="table table-dark table-striped mt-4">
    <table id="articulos" class="table table-striped" style="width:100%"> -->
    
    <table id="articles" class="table table-striped table-bordered shadow-lg" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th ssope="col">ID</th>
                <th ssope="col">Code</th>
                <th ssope="col">Description</th>
                <th ssope="col">Amount</th>
                <th ssope="col">Price</th>
                <th ssope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>{{$articulo->codigo}}</td>
                    <td>{{$articulo->descripcion}}</td>
                    <td>{{$articulo->cantidad}}</td>
                    <td>{{$articulo->precio}}</td>
                    <td>
                        <form action="{{route ('articulos.destroy', $articulo->id)}}" method="POST">
                            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" type="text/css" rel="stylesheet">
@stop

@section('js')
<script  type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script  type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script  type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#articles').DataTable({
                    "lengthMenu":[[5,10,50, -1],[5,10,50,"ALL"]]
                });
            } );
        </script>
@stop