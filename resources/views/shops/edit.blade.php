@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Agregar tienda</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('shops.update',$shop->id_shops) }}" role="form">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Dirección</label>
                                <input type="text" name="address" class="form-control" placeholder="Nombre" value="{{$shop->address}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" name="city" class="form-control" placeholder="Nombre" value="{{$shop->city}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Horario</label>
                                    <input type="text" name="office_hours" class="form-control" placeholder="Nombre" value="{{$shop->office_hours}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Nombre" value="{{$shop->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Correo electronico</label>
                                    <input type="text" name="email" class="form-control" placeholder="Nombre" value="{{$shop->email}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
								</div>	
								<div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="{{url('shops')}}" class="btn btn-info btn-block" >Atrás</a>
								</div>
							</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection