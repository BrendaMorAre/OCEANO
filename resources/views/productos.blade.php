@extends('layouts.menu')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    &nbsp; &nbsp;<em class="fa fa-home"></em>
                </a></li>
            <li class="active">Productos</li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-12">
        <h1 class="page-header">Productos</h1>
    </div>
    <link href="css/tablas.css" rel="stylesheet">
    <div class="container">
        <div class="boton" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearProducto" style="text-align: left"><span class="icon-android-add"></span>Nuevo Producto</button>
            @include('modals.crear.crearProducto')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>PC</td>
                <td>6512</td>
                <td>COMPAQ°</td>
                <td>
                    <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#detalleProducto" title="Detalle"><span class="icon-file-text-o"></span></button>
                    @include('modals.detalle.detalleProducto')
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editarProducto" title="Editar"><span class="icon-pencil-square-o"></span></button>
                    @include('modals.editar.editarProducto')
                    <button type="button" class="btn btn-danger" title="Eliminar"><span class="icon-trash-alt"></span></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection