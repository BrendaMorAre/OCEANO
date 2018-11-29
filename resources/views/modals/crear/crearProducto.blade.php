
<!-- Modal -->
<div class="modal fade" id="crearProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" id="header-5">
                <h4 id="title" class="modal-title">NUEVO PRODUCTO</h4>
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
                            <input type="text" class="form-control" id="provee-input" name="name" placeholder="Nombre del producto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provee-input" name="modelo" placeholder="Modelo del producto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Marca</label>
                        <div class="col-sm-10">
                            {!! Form::open() !!}
                            {!! Form::select('id', $marcas, null, ['class' => 'form-control']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>


                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Imagen del producto</label>
                        <div class="col-sm-3" id="upload-btn-wrapper">
                            <button class="boton-file">Elegir imagen</button>
                            <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                            <img class="col-sm-6" id="preview"  src="" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="label" for="inputPassword3" class="col-sm-2 col-form-label">Costo del producto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="costo" placeholder="Costo del producto">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="producto">Guardar</button>
            </div>
        </div>
    </div>
</div>