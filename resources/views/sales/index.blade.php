@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title"> Productos</h4>
                            <a href="#instructions" data-toggle="modal" data-target="#instructions"><i
                                    class="nc-icon nc-alert-circle-i" style="color:darkgoldenrod"></i></a>
                        </div>
                        {{-- Buscador --}}
                        <div class="col-md-3">

                            <form method="GET" action="{{ route('sales.index') }}" role="form">
                                <div class="input-group no-border">
                                    <input type="text" value="" name="n_c" class="form-control"
                                        placeholder="Buscar por categoria">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="nc-icon nc-zoom-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">

                            <form method="GET" action="{{ route('sales.index') }}" role="form">
                                <div class="input-group no-border">
                                    <input type="text" value="" name="title" class="form-control"
                                        placeholder="Buscar por producto">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="nc-icon nc-zoom-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{--  --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Categoria</td>
                                    <td>Producto</td>
                                    <td>Precio venta</td>
                                    <td>Stock</td>
                                    <td>Agregar</td>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $product)
                                <tr>
                                    @foreach ($categories as $category)
                                    @if ($category->id_categories == $product->id_categories)
                                        <td>{{$category->name}}</td>

                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td><a href="{{route('sales.shopping_cart',$product->id_products)}}"><i class="nc-icon nc-cart-simple icon-medium" style="color:green"></i></a>
                                    </td>
                                    @endif
                                    @endforeach
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                {{$products->render()}}

                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
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
                        <p><i class="nc-icon nc-glasses-2 icon-medium" style="color:green"></i> Permite ver todos los
                            datos de un producto.</p>
                        <p><i class="nc-icon nc-ruler-pencil icon-medium" style="color:dodgerblue"></i> Permite ver
                            editar los datos de un producto.</p>
                        <p><i class="nc-icon nc-simple-remove icon-medium" style="color:orangered"></i> Permite ver
                            eliminar un producto.</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection