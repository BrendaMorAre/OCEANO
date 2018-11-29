@extends('layouts.menu')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    &nbsp; &nbsp;<em class="fa fa-home"></em>
                </a></li>
            <li class="active">Empleados</li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-12">
        <h1 class="page-header">Empleados</h1>
    </div>
    <link href="css/tablas.css" rel="stylesheet">
    <div class="container">
        <div class="boton" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearEmpleado" style="text-align: left"><span class="icon-android-add"></span>Nuevo Empleado</button>
            @include('modals.crear.crearEmpleado')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Departamento</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Administración</td>
                <td>3141184163</td>
                <td>
                    <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#detalleEmpleado" title="Detalle"><span class="icon-file-text-o"></span></button>
                    @include('modals.detalle.detalleEmpleado')
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editarEmpleado" title="Editar"><span class="icon-pencil-square-o"></span></button>
                    @include('modals.editar.editarEmpleado')
                    <button type="button" class="btn btn-danger" title="Eliminar"><span class="icon-trash-alt"></span></button>
                </td>
            </tr>
            </tbody>
        </table>
@endsection