@extends('layouts.menu')

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">


    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    &nbsp; &nbsp;<em class="fa fa-home"></em>
                </a></li>
            <li class="active">Clientes</li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-12">
        <h1 class="page-header">Clientes</h1>
    </div>

    <button>Generar PDF</button>
    <link href="css/tablas.css" rel="stylesheet">
    <div class="container">
        <div class="boton" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearCliente" style="text-align: left"><span class="icon-android-add"></span>Nuevo cliente</button>
            @include('modals.crear.crearCliente')
        </div>
    </div>
    <table id="clientes-table" class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre Comercial</th>
            <th>Telefono</th>
            <th>RFC</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{  $cliente->id }}</td>
                <td>{{ $cliente->nombre_comercial }}</td>
                <td>{{ $cliente->telefono1 }}</td>
                <td>{{ $cliente->rfc }}</td>
                <td>
                    <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#detalleCliente" title="Detalle"><span class="icon-file-text-o"></span></button>
                    @include('modals.detalle.detalleCliente')
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editarCliente" title="Editar"><span class="icon-pencil-square-o"></span></button>
                    @include('modals.editar.editarCliente')
                    <button type="button" class="btn btn-danger" title="Eliminar"><span class="icon-trash-alt"></span></button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#clientes-table').DataTable();
    } );
</script>

