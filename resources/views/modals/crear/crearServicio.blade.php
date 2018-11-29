
<!-- Modal -->
<div class="modal fade" id="crearServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" id="header-6">
                <h4 id="title" class="modal-title">NUEVO SERVICIO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="servicio-form" method="POST" action="{{url('')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group row">
                        <div class="form-group">
                            <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tiposerv">
                                    <option>Domicilio</option>
                                    <option>Empresa</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group">
                            <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Área del servicio</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tiposerv">
                                    <option>Correos</option>
                                    <option>Instalación</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Nombre del servicio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="domproveedor" placeholder="Modelo del producto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="telproveedor" placeholder="Marca del producto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Costo del servicio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="costo" placeholder="Costo del producto">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="servicio">Guardar</button>
            </div>
        </div>
    </div>
</div>