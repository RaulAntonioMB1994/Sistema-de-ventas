@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <img src="{{url("/products/images/$product->id_products.$product->extension")}}" alt="..."
                                style="border-radius: 20px;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Producto</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('sales.update',$product->id_products) }}" role="form">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <input type="hidden" name="id_shopping_carts" value="{{$id_shopping_carts}}">
                                    <div class="row">
                                        <div class="col-md-8 pr-1">
                                            <div class="form-group">
                                                <label>Producto:</label>
                                                <input type="text" class="form-control" disabled
                                                    value="{{$product->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input disabled type="text" class="form-control" placeholder="Stock"
                                                    value="{{$product->stock}}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <textarea disabled class="form-control textarea"
                                                    style="rows:40">{{$product->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input disabled type="text" class="form-control" placeholder="Precio"
                                                    value="{{$product->price}}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Descuento</label>
                                                <input disabled type="text" class="form-control" placeholder="Descuento"
                                                    value="{{$product->discounts_percent}}">
                                            </div>
                                        </div>

                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Agregar al carro:</label>
                                                <input type="number" class="form-control" name="quantity" value="1" min="1" max="{{$product->stock}}">

            
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <a href="{{url('sales')}}" class="btn btn-info btn-block">Atrás</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>


</div>
@endsection