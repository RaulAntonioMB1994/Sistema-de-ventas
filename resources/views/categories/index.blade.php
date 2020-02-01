@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Categorias</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                        <a href="{{route('categories.edit',$categories->id_categories)}}"><i class="nc-icon nc-ruler-pencil icon-medium" style="color:dodgerblue"></i></a>
                                        <a href="{{route('categories.destroy',$categories->id_categories)}}"><i class="nc-icon nc-simple-remove icon-medium" style="color:orangered"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="floating icon-big">

            <a href="{{url('/categories/create')}}" class="btn btn-primary btn-fab">
                <i class="nc-icon nc-simple-add"></i>
            </a>
        </div>
    </div>
</div>
        @endsection