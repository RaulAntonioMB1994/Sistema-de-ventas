@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Carro de compras</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('sales.store') }}" role="form">
                        {{ csrf_field() }}
                        <label for="">Selecciona tipo de despacho:</label>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group  form-check-inline">
                                    <div class="checkbox">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Despacho a domicilio</label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 pr-1">
                                <div class="form-group  form-check-inline">
                                    <div class="checkbox">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Retiro en tienda</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="">Productos agregados al carro:</label>
                        <hr>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Imagen</td>
                                        <td>Nombre</td>
                                        <td>Cantidad</td>
                                        <td>Precio unitario</td>
                                        <td>SubTotal</td>
                                        <td>Acciones</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>jpeg</td>
                                        <td>Papelucho</td>
                                        <td><select class="form-control" name="id_categories">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </td>
                                        <td>$2000</td>
                                        <td>$2000</td>
                                        <td><i class="nc-icon nc-simple-remove icon-medium" style="color:orangered"></i>
                                        </td>
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
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <input type="submit" value="Agregar Productos" class="btn btn-info btn-block">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <input type="submit" value="Vaciar Carro" class="btn btn-danger btn-block">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <a href="{{url('sales')}}" class="btn btn-info btn-block">Atrás</a>
                            </div>
                        </div><br>
                        <label for="">¿Deseas continuar con la compra?</label>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4  offset-md-8  offset-sm-8  offset-xs-8">
                                <a href="{{url('sales_details')}}" type="submit" class="btn btn-success btn-block">Continuar Compra</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection