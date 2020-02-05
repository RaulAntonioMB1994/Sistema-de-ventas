<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="card-header">
        <h1 class="card-title">Lista de productos</h1><hr>
    </div>
    <div class="card-body">
        <div class="table-responsive ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Num</td>
                        <td>Producto</td>
                        <td>Precio venta</td>
                        <td>Stock</td>
                    </tr>
                </thead>
                <tbody>
                    {{$i=1}}
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td align="justify">{{ $product->title}}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->stock}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>