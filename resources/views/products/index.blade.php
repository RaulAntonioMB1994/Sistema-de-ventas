@extends("layouts.app")

@section("content")
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Descripción</td>
                    <td>stock</td>
                    <td>páginas</td>
                    <td>author</td>
                    <td>editorial</td>
                    <td>precio</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                    <tr>
                        <td><a href="">{{  $product->id_products  }}</a></td>
                        <td>{{  $product->title  }}</td>
                        <td>{{  $product->description  }}</td>
                        <td>{{  $product->stock  }}</td>
                        <td>{{  $product->pages_book  }}</td>
                        <td>{{  $product->author  }}</td>
                        <td>{{  $product->editorial  }}</td>
                        <td>{{  $product->price  }}</td>
                        <td><a href="{{url('/products/'.$product->id.'/edit')}}">detalles</a>
                        <a href="{{url('/products/'.$product->id.'/edit')}}">editar</a>
                        <a href="{{url('/products/'.$product->id.'/edit')}}">eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
              </div>
            </div>
          </div>

    <div class="big-padding text-center blue-grey white-text">
        <h1>Productos</h1>
    </div>
    <div class="container">
        
    </div>

    <div class="floating">
        <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>
        </a>
    </div>
@endsection