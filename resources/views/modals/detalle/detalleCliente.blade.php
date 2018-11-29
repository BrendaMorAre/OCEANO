
<!-- Modal -->
<div class="modal fade" id="detalleCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">DETALLE DEL CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{url('/select/declarationIVA')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Nombre comercial:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Nombre fiscal:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Martha Gomez</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Contacto:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Oscar Lomeli</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Telefonos:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">314 11 55 23 1</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <p class="text-capitalize">314 55 261 11</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="subtittle-form">Correos</h4>
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Cobranza: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Sistemas: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Cotizaciones:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Martha Gomez</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Boletines: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="subtittle-form">General</h4>
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">RFC:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Oscar Lomeli</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Domicilio:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Oscar Lomeli</p>
                                </div>
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