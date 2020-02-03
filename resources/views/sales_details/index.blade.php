@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Boleta</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="" role="form">
                        {{ csrf_field() }}
                        <label for="">Datos de boleta:</label>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Rut</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>

                        </div>
                        <label for="">Identifica a la persona que lo recibe:</label>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>¿Quien recibe?</label>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group  form-check-inline">
                                    <div class="checkbox">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yo</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="offset-md-6 col-md-6 pr-1">
                                <div class="form-group  form-check-inline">
                                    <div class="checkbox">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Otro, datos de quien
                                            recibe</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6  pr-1">
                                <div class="form-group">
                                    <label>*Nombre</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6  pr-1">
                                <div class="form-group">
                                    <label>*Rut</label>
                                    <input type="text" name="title" class="form-control" placeholder="Titulo" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <label for="">Datos para el despacho:</label>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Region</label>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <select class="form-control" name="id_categories">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <select class="form-control" name="id_categories">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Dirección</label>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Dirección"
                                        value="" required>
                                </div>
                            </div>
                        </div>
                        <label for="">Costo despacho a domicilio:</label>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <p>Envio estandar</p>
                                </div>
                            </div>
                            <div class="offset-md-3 col-md-3 pr-1">
                                <div class="form-group">
                                    <p>Gasto de envio</p>
                                    <input type="text" name="address" class="form-control" disabled
                                        placeholder="Dirección" value="2000" required>
                                </div>
                            </div>
                        </div>
                        <label for="">Productos en compra:</label>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Cantidad</td>
                                        <td>Producto(s)</td>
                                        <td>Precio unitario</td>
                                        <td>SubTotal</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>Papelucho</td>
                                        <td>$2000</td>
                                        <td>$2000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class=" offset-md-8 col-md-4">
                                    <p>TOTAL NETO $2000</p>
                                    <hr>
                                    <p>IVA $800</p>
                                    <hr>
                                    <p>TOTAL $2800</p>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="{{url('sales')}}" class="btn btn-info btn-block">volver</a>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" value="PAGAR" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection