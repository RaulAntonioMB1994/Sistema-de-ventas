@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Crear categorias</h5>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}"   role="form">
                {{ csrf_field() }}
                        <div class="row">
                            
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" placeholder="Username" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
								</div>	
								<div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="{{url('categories')}}" class="btn btn-info btn-block" >Atrás</a>
								</div>
							</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection