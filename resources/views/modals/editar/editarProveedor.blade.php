
<!-- Modal -->
<div class="modal fade" id="editarProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="title" class="modal-title">Editar Datos del proveedor</h5>
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
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Domicilio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="domproveedor" placeholder="Domicilio del proveedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="telproveedor" placeholder="Número telefonico del proveedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Vendedor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="vendedor" placeholder="Nombre del vendedor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-3 col-form-label">  Correo</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="provee-input" name="correo1" placeholder="Correo Principal">
                            </div>
                        </div>
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-3 col-form-label">Correo 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="provee-input" name="correo2" placeholder="Correo alterno">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Contacto Skype</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="contskype" placeholder="Nombre de contacto en skype">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Número de cuenta</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="provee-input" name="numcuenta" placeholder="Número de cuenta">
                            </div>
                        </div>
                        <div class="col-xs-6 form-group">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nombre del banco</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="provee-input" name="nombanco" placeholder="Nombre del banco">
                            </div>
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