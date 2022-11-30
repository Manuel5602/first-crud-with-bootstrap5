<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Informacion completa</title>
</head>
<body>
    
    <div class="container-fluid">
    <h1>informacion del estudiante llamado: {{$student->name}}</h1>
    <div class="row">
    <div class="col">
      <h3><strong>Edad: </strong>{{$student->age}}</h3>
      <h3><strong>Correo: </strong>{{$student->email}}</h3>
      <a href="{{route('home.index')}}" class="btn btn-info">Volver</a>
    </div>
    </div>
</body>
</html>