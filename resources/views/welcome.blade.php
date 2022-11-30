<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Estudiantes de una sala de clases estandar.</title>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Estudiantes</a>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col">



                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-primary table-striped mt-3 table-sm">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $datos)
                            <tr>
                                <th>{{$datos->id}}</th>
                                <td class="text-break">{{$datos->name}}</td>
                                <td >{{$datos->age}}</td>
                                <td >{{$datos->email}}</td>
                                <td ><a href="{{route('info.informacion', $datos->id)}}" class="btn btn-info btn-sm">Informacion completa</a></td>
                                <td ><a href="{{route('new.create')}}" class="btn btn-success btn-sm">Nuevo</a></td>
                                <td ><a href="{{route('edit.edit', $datos)}}" class="btn btn-warning btn-sm">Editar</a></td>
                                <td class="text-wrap"><a href="{{route('delete.delete', $datos)}}" class="btn btn-danger btn-sm">Eliminar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $student->links()}}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>