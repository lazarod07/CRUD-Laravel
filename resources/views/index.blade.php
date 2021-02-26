<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Develop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Develop</h3>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('category.list') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Categorias</a>
            </div>
            <div class="col">
                <a href="{{ route('product.list') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Productos</a>
            </div>
            <div class="col">
                <a href="{{ route('store.products') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Punto de venta</a>
            </div>
        </div>
    </div>
</body>

</html>