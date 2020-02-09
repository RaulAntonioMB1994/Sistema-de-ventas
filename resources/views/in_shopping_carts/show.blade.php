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
                                <p></p>
                                <form>
                                    <div class="row">
                                        <div class="col-md-8 pr-1">
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <input type="text" class="form-control" disabled
                                                    value="{{$product->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Categoria</label>
                                                <select class="form-control" name="id_categories" disabled="">
                                                    @foreach ($categories as $category)
                                                    @if ($category->id_categories == $product->id_categories)
                                                    <option value="{{$category->id_categories}}">
                                                        {{$category->name}}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
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
                                                <label>Autor</label>
                                                <input disabled type="text" class="form-control" placeholder="Autor"
                                                    value="{{$product->author}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Editorial</label>
                                                <input disabled type="text" class="form-control" placeholder="Editorial"
                                                    value="{{$product->editorial}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input disabled type="text" class="form-control" placeholder="Stock"
                                                    value="{{$product->stock}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input disabled type="text" class="form-control" placeholder="Precio"
                                                    value="{{$product->price}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Página</label>
                                                <input disabled type="text" class="form-control" placeholder="Página"
                                                    value="{{$product->pages_book}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>Descuento</label>
                                                <input disabled type="text" class="form-control" placeholder="Descuento"
                                                    value="{{$product->discounts_percent}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="{{url('products')}}" class="btn btn-info btn-block">Atrás</a>
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