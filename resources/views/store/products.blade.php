<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Punto de venta</h3>
    <br>
    <div class="container">
        <a href="{{ route('index')}}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Valor</th>
                        <th>Unidades</th>
                        <th>Categoria</th>
                        <th>Comprar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th>{{$product->name}}</th>
                        <th>{{$product->state}}</th>
                        <th>{{$product->value}}</th>
                        <th>{{$product->number}}</th>
                        <th>{{$product->category()->get()[0]->name}}</th>
                        <th><a href="{{ route('store.sellGet', ['id' => $product]) }}">Comprar</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>