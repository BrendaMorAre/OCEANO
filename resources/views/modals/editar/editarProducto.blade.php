
<!-- Modal -->
<div class="modal fade" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="title" class="modal-title">Editar Datos del producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detalle-prove">
                <form class="form-horizontal" method="POST" action="{{url('')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group row">
                        <label id="label" for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="nomproveedor" placeholder="Nombre del proveedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Marca</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="domproveedor" placeholder="Domicilio del proveedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="telproveedor" placeholder="Número telefonico del proveedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Imagen del producto</label>
                        <div class="col-sm-3" id="upload-btn-wrapper">
                            <button class="boton-file">Elegir imagen</button>
                            <input type="file" name="" name="vendedor"  />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Costo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="costproduc" placeholder="Costo del producto">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>