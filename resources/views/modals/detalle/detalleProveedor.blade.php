
<!-- Modal -->
<div class="modal fade" id="detalleProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">DETALLE DEL PROVEEDOR</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detalle-prove">
                <form class="form-horizontal" method="POST" action="{{url('/select/declarationIVA')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Nombre: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">COMPAQ°</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Domicilio:</label>
                                <div class="col-sm-8">
                                    <p class="text-capitalize">Av. las palmas, camino a las humedades #5236</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Telefono:</label>
                                <div class="col-sm-7">
                                    <p class="text-capitalize">314 11 55 23 1</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Vendedor:</label>
                                <div class="col-sm-7">
                                    <p class="text-capitalize">314 11 55 23 1</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="subtittle-provee">Correos</h4>
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Correos: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Cima Logistic</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <p class="text-capitalize">Martha Gomez</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="subtittle-provee">General</h4>
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Contacto de Skype:</label>
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
                                <label id="label" class="col-sm-6 control-label">Número de cuenta: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">043516251621</p>
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="label" class="col-sm-7 control-label">Nombre del banco: </label>
                                <div class="col-sm-5">
                                    <p class="text-capitalize">Banamex</p>
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
</div>