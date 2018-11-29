@extends('layouts.menu')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    &nbsp; &nbsp;<em class="fa fa-home"></em>
                </a></li>
            <li class="active">Usuarios</li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-12">
        <h1 class="page-header">Usuarios</h1>
    </div>
    <link href="css/tablas.css" rel="stylesheet">
    <div class="container">
        <div class="boton" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearUsuario"><span class="icon-android-add"></span>Nuevo Usuario</button>
            @include('modals.crear.crearUsuario')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Departamento</th>
                <th scope="col">Alta</th>
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
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editarUsuario" title="Editar"><span class="icon-pencil-square-o"></span></button>
                    @include('modals.editar.editarUsuario')
                    <button type="button" class="btn btn-danger" title="Eliminar"><span class="icon-trash-alt"></span></button>
                </td>
            </tr>
            </tbody>
        </table>
@endsection