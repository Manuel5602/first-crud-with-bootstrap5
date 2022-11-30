<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Editar</title>
</head>

<body>
    <div class="container-fluid">
        <h1><strong>Editar informacion del estudiante</strong></h1>
        <form action="{{route('update.update', $datos)}}" method="POST">
            @csrf
            @method('put')
            <label for="exampleFormControlInput1" class="form-label">Nombre del estudiante: </label>
            <input type="text" class="form-control" id="name" name="Name" value="{{$datos->name}}">
            @error('Name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="exampleFormControlInput2" class="form-label">Edad: </label>
            <input type="number" class="form-control" id="age" placeholder="22" name="Age" value="{{$datos->age}}">
            @error('Age')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="exampleFormControlInput3" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="Email" value="{{$datos->email}}">

            @error('Email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{route('home.index')}}" class="btn btn-bg-secondary border border-primary">Cancelar</a>
        </form>
    </div>
</body>

</html>