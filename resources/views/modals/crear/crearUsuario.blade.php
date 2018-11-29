
<!-- Modal -->
<div class="modal fade" id="crearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" id="header-1">
                <h4 id="title" class="modal-title">NUEVO USUARIO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="provee-form" method="POST" action="{{url('')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group row">
                        <label id="label" for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomusuario" placeholder="Nombre de usuario">
                        </div>
                    </div>

                    <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-4 col-form-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="correo1" placeholder="contraseña">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-6 form-group">
                            <label id="label" for="inputPassword3" class="col-sm-4 col-form-label">Confirmar contraeña</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password-confirm" name="correo2" placeholder="confirmar contraseña">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group">
                            <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Departamento de trabajo</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tiposerv">
                                    <option>Facturación</option>
                                    <option>Mantenimiento</option>
                                    <option>Instalación</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="usuario">Guardar</button>
            </div>
        </div>
    </div>
</div>