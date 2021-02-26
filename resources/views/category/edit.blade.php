<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Agregar categoria</h3>
    <br>
    <div class="container">
        <a href="{{ route('category.list')}}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <form action="{{ route('category.editPost', ['id' => $category]) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-form-label col-sm-1">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="description" class="col-form-label col-sm-1">Descripcion</label>
                <div class="col-sm-4">
                    <input type="text" name="description" id="description" value="{{ $category->description }}" class="form-control">
                </div>
            </div>
            <div>
                <input type="submit" value="Editar" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>