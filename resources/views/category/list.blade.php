<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h3>Categorias</h3>
    <br>
    <div class="container">
        <a href="{{ route('index')}}" class="btn btn-secondary" role="button" data-bs-toggle="button">Atras</a>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Ver productos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th>{{$category->name}}</th>
                        <th>{{$category->description}}</th>
                        <th><a href="{{ route('category.editGet', ['id' => $category]) }}">Editar</a></th>
                        <th><a href="{{ route('category.delete', ['id' => $category]) }}">Eliminar</a></th>
                        <th><a href="{{ route('category.products', ['id' => $category]) }}">Ver productos</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a href="{{ route('category.addGet')}}" class="btn btn-primary" role="button" data-bs-toggle="button">Agregar categoria</a>
    </div>
</body>

</html>