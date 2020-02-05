@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Datos de la empresa</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('business.update',$business->id_business) }}" role="form">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" class="form-control" disabled value="{{$business->id_business}}">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input name="name" type="text" class="form-control" 
                                value="{{$business->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" value="Guardar" class="btn btn-success btn-block">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="{{url('categories')}}" class="btn btn-info btn-block">Atrás</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Use of notifications --}}
@jquery
@toastr_js
@toastr_render
{{-- End notifications--}}
@endsection




