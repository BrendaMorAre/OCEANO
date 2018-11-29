
<!-- Modal -->
<div class="modal fade" id="detalleEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">DETALLE DEL CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="detaempleado" class="form-horizontal" method="POST" action="{{url('/select/declarationIVA')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Nombre:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Departamento de trrabajo:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">Martha Gomez</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Teléfono:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">314 11 55 23 1</p>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Celular:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">314 55 261 11</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Domicilio:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">Oscar Lomeli</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">RFC:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">Oscar Lomeli</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Fecha de nacimientno:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">314 11 55 23 1</p>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Fecha de contratación:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">314 55 261 11</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-6">
                            <label id="label" class="col-sm-6 control-label">Observaciones:</label>
                            <div class="col-sm-6">
                                <p class="text-capitalize">Oscar Lomeli</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>