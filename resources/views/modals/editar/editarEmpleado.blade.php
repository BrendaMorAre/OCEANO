
<!-- Modal -->
<div class="modal fade" id="editarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">Editar Datos del empleado</h4>
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
                        <div class="form-group">
                            <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Departamento de trabajo</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tiposerv">
                                    <option>Correos</option>
                                    <option>Instalación</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-4 col-form-label">Teléfono</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="correo1" placeholder="número de teléfono">
                            </div>
                        </div>
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-4 col-form-label">Celular</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="correo2" placeholder="número de celular">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" class="col-sm-2 col-form-label">Domiclio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="domicilio" placeholder="domicilio">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">RFC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="rfc" placeholder="registro federal del contribuyente">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">NSS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="numsocial" placeholder="número de seguro social">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="numsocial" placeholder="número de seguro social">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" class="col-sm-2 col-form-label">Fecha de contratación</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="numsocial" placeholder="número de seguro social">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Observaciones</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" id="comment"></textarea>
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