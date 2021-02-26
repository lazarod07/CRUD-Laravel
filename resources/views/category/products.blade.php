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
    <h3>Productos</h3>
    <br>
    <div class="container">
        <a href="{{ route('category.list')}}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Valor</th>
                        <th>Unidades</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th>{{$product->name}}</th>
                        <th>{{$product->state}}</th>
                        <th>{{$product->value}}</th>
                        <th>{{$product->number}}</th>
                        <th><a href="{{ route('category.editProductGet', ['idCategory' => $id , 'idProduct' => $product]) }}">Editar</a></th>
                        <th><a href="{{ route('category.deleteProduct', ['idCategory' => $id , 'idProduct' => $product]) }}">Eliminar</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a href="{{ route('category.addProductGet', ['id' => $id]) }}" class="btn btn-primary" role="button" data-bs-toggle="button">Agregar producto</a>
    </div>
</body>

</html>