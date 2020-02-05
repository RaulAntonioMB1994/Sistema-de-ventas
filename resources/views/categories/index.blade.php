@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Categorias</h4>
    
                    {{-- Modal instructions --}}
                    <a href="#instructions" data-toggle="modal" data-target="#instructions"><i
                            class="nc-icon nc-alert-circle-i" style="color:darkgoldenrod"></i></a>
                    {{-- End Modal --}}

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- table responsive --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nombre</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories)
                                <tr>
                                    <td><a href="">{{ $categories->id_categories  }}</a></td>
                                    <td>{{ $categories->name  }}</td>
                                    <td>

                                        {{-- Link icon for edit - destroys --}}
                                        <a href="{{route('categories.edit',$categories->id_categories)}}"><i
                                                class="nc-icon nc-ruler-pencil icon-medium"
                                                style="color:dodgerblue"></i></a>
                                        <a href="{{route('categories.destroy',$categories->id_categories)}}"><i
                                                class="nc-icon nc-simple-remove icon-medium"
                                                style="color:orangered"></i></a>
                                        {{-- End Link icon--}}

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- End table --}}
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                {{$category->render()}}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{--  Button create --}}
        <div class="floating icon-big">

            <a href="{{url('/categories/create')}}" class="btn btn-primary btn-fab">
                <i class="nc-icon nc-simple-add"></i>
            </a>
        </div>
        {{-- End Button create --}}
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="instructions" tabindex="-1" role="dialog" aria-labelledby="instructions"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Representación de los iconos </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><i class="nc-icon nc-ruler-pencil icon-medium" style="color:dodgerblue"></i> Permite ver editar
                        los datos de una categoria.</p>
                    <p><i class="nc-icon nc-simple-remove icon-medium" style="color:orangered"></i> Permite ver eliminar
                        una categoria.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Volver</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End modal --}}
</div>

{{-- Use of notifications --}}
@jquery
@toastr_js
@toastr_render
{{-- End notifications--}}
@endsection