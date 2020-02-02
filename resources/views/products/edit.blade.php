@extends("layouts.app")

@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Ingresar productos</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('products.update',$product->id_products)}}" enctype="multipart/form-data" role="form">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Categorias</label>
                                    <select class="form-control" name="id_categories">
                                        @foreach ($categories as $category)
                                        @if ($category->id_categories == $product->id_categories)
                                        <option value="{{$category->id_categories}}">
                                            {{$category->name}}
                                        </option>
                                        @endif
                                        @endforeach
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id_categories}}">
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label>Titlulo</label>
                                <input type="text" name="title" class="form-control" placeholder="Titulo" value="{{$product->title}}"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-4 pr-1" style="padding-top: 25px;">
                                <div class="form-group custom-file">
                                    <input name="file" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Elija el
                                        archivo...</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea class="form-control" name="description" required
                                placeholder="Ingrese una descripción" rows="3">{{$product->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Autor</label>
                                <input type="text" name="author" class="form-control" placeholder="Autor" value="{{$product->author}}"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Editorial</label>
                                    <input type="text" name="editorial" class="form-control" placeholder="Editorial"
                                value="{{$product->editorial}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Stock</label>
                                <input type="number" name="stock" class="form-control" placeholder="Stock" value="{{$product->stock}}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Precio</label>
                                <input type="number" name="price" class="form-control" placeholder="Precio" value="{{$product->price}}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Páginas</label>
                                    <input type="number" name="pages_book" class="form-control" placeholder="páginas"
                                value="{{$product->pages_book}}" required>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Descuento</label>
                                    <input type="number" name="discounts_percent" class="form-control"
                                placeholder="Descuentos %" value="{{$product->discounts_percent}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" value="Guardar" class="btn btn-success btn-block">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="{{url('products')}}" class="btn btn-info btn-block">Atrás</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection