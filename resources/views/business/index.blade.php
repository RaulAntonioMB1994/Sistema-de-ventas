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
                    <form>
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
                                    <input  type="text" class="form-control" disabled
                                        value="{{$business->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a href="{{route('business.edit',$business->id_business)}}"
                                    class="btn btn-info btn-block">Editar</a>

                                    
                                    


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




