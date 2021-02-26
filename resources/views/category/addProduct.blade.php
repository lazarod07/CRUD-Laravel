<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Agregar producto</h3>
    <br>
    <div class="container">
        <a  href="{{ route('category.products', ['id' => $id]) }}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <form action="{{ route('category.addProductPost', ['id' => $id]) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-form-label col-sm-1">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="state" class="col-form-label col-sm-1">Estado</label>
                <div class="col-sm-4">
                    <select name="state" id="state">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="value" class="col-form-label col-sm-1">Valor</label>
                <div class="col-sm-4">
                    <input type="number" name="value" id="value" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="number" class="col-form-label col-sm-1">Unidades</label>
                <div class="col-sm-4">
                    <input type="number" name="number" id="number" class="form-control">
                </div>
            </div>
            <br>
            <div>
                <input type="submit" value="Agregar" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>