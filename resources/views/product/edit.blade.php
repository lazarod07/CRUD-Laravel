<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Editar producto</h3>
    <br>
    <div class="container">
        <a href="{{ route('product.list') }}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <form action="{{ route('product.editPost', ['id' => $product]) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-form-label col-sm-1">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" name="name" value="{{ $product->name }}" id="name">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="state" class="col-form-label col-sm-1">Estado</label>
                <div class="col-sm-4">
                    <select name="state" id="state">
                        <option value="{{ $product->state }}">{{ $product->state }}</option>
                        @if($product->state == 'Activo')
                        <option value="Inactivo">Inactivo</option>
                        @endif
                        @if($product->state == 'Inactivo')
                        <option value="Activo">Activo</option>
                        @endif
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="value" class="col-form-label col-sm-1">Valor</label>
                <div class="col-sm-4">
                    <input type="number" name="value" value="{{ $product->value }}" id="value">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="number" class="col-form-label col-sm-1">Unidades</label>
                <div class="col-sm-4">
                    <input type="number" name="number" value="{{ $product->number }}" id="number">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="category" class="col-form-label col-sm-1">Categoria</label>
                <div class="col-sm-4">
                    <select name="category" id="category">
                        <option value="{{ $product->category()->get()[0]->id }}"> {{ $product->category()->get()[0]->name }}</option>
                        @foreach($categories as $cat)
                        @if($cat->id != $product->category()->get()[0]->id)
                        <option value="{{ $cat->id }}">{{$cat->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div>
                <input type="submit" value="Editar" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>