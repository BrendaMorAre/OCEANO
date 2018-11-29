@php
    $productos = DB::table('productos')->get();
@endphp
<!-- Modal -->
<div class="modal fade" id="agregarProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Buscar productos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="provee-form" method="POST" action="{{url('')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">

                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="provee-input" name="nomproveedor" placeholder="Nombre del producto">
                        </div>
                        <button type="button" class="btn btn-light"><span class="icon-search" style="margin-right: 8%"></span>Buscar</button>
                    </div>

                    <table class="table table-striped" id="products-table">
                        <thead id="tblHead">
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th class="text-right">Cant.</th>
                            <th class="text-right">Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->modelo }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->marca_id }}</td>
                                <td>Cantidad</td>
                                <td>{{ $producto->precio }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="producto">Guardar</button>
            </div>
        </div>
    </div>
</div>