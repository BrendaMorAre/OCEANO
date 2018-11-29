@extends('layouts.menu')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    &nbsp; &nbsp;<em class="fa fa-home"></em>
                </a></li>
            <li class="active">Servicios</li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-10">
        <h1 class="page-header">Servicios</h1>
    </div>
    <link href="css/tablas.css" rel="stylesheet">
    <div class="container">
        <div class="boton" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearServicio"><span class="icon-android-add"></span>Nuevo Servicio</button>
            @include('modals.crear.crearServicio')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Área</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th width="50" height="16" scope="row">1</th>
                <td>Domicilio</td>
                <td>Instalaciones</td>
                <td>
                    <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#detalleServicio" title="Detalle"><span class="icon-file-text-o"></span></button>
                    @include('modals.detalle.detalleServicio')
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editarServicio" title="Editar"><span class="icon-pencil-square-o"></span></button>
                    @include('modals.editar.editarServicio')
                    <button type="button" class="btn btn-danger" title="Eliminar"><span class="icon-trash-alt"></span></button>
                </td>
            </tr>
            </tbody>
        </table>
@endsection