<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Comprar</h3>
    <br>
    <div class="container">
        <a href="{{ route('product.list') }}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <h2>{{ $product->name }}</h2>
        <form action="{{ route('store.sellPost', ['id' => $product]) }}" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <ul>
                    <li>Categoria: {{$product->category()->get()[0]->name}}</li>
                    <li>Valor: {{ $product->value }}$</li>
                    <li>
                        <div class="row">
                            <label for="number" class="col-form-label col-sm-3">Unidades:</label>
                            <div class="col-sm-4">
                                <input type="number" name="number" id="number" min="1" max="{{ $product->number }}">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Comprar" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>

</html>