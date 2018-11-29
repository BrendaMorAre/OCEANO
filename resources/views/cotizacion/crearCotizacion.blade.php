@extends('layouts.menu')

@section('content')
    <link href="css/factura.css" rel="stylesheet">
    <h2 id="tittle-cotizacion"><span id="icon-cotizacion" class="icon-external-link"></span>Nueva Cotización</h2>
    <hr>
    <div class="container-fluid" id="containerFactura"><!-- Row 1 -->
        <div class="col-lg-4" id="userFormColumn1">
            <div class="form-group">
                <label id="cotizacion" class="col-sm-3 col-form-label">Atención</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control cotizacion" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="col-lg-4" id="userFormColumn2">
            <div class="form-group">
                <label id="cotizacion" class="col-sm-3 col-form-label">Proyecto</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control cotizacion" id="inputEmail3" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="col-lg-4" id="userFormColumn2">
            <div class="form-group">
                <label id="cotizacion" class="col-sm-3 col-form-label">Cliente</label>
                <div class="col-sm-8">
                        {!! Form::open() !!}
                        {!! Form::select('id', $clientes, null, ['class' => 'form-control']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="containerCotizacion"><!-- Row 2 -->
        <div class="col-lg-4" id="userFormColumn1">
            <div class="form-group">
                <label id="cotizacion" class="col-sm-3 col-form-label">Empresa</label>
                <div class="col-sm-8">
                        {!! Form::open() !!}
                        {!! Form::select('id', $empresas, null, ['class' => 'form-control']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4" id="userFormColumn2">
            <div class="form-group">
                <label id="cotizacion" class="col-sm-3 col-form-label">Teléfono</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control cotizacion" id="inputEmail3" placeholder="Email">
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button type="button" class="btn btn-success products" data-toggle="modal" data-target="#agregarProductos"><span class="icon-android-add"></span>Agregar Productos</button>
        @include('cotizacion.catproductos')
        <a target="_blank" href="/clientes/pdf" class="btn btn-primary">Imprimir</a>
    </div>
    <div class="area-productos">

    </div>
@endsection