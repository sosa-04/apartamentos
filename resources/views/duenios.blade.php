<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duenios</title>
</head>
<body>
    <div>
        <h1>Duenios</h1>
        <br>
        <br>

        <div>

            <button class="btn btn-primary">Agregar Duenios</button>

            <a href="{{route('propiedad.home')}}" class="btn btn-warning">Volver</a>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <body>
               
                @foreach ($duenios as $duenio)
                    <tr>
                        <td>{{ $duenio->idDuenio }}</td>
                        <td>{{ $duenio->nombre }}</td>
                        <td>{{ $duenio->apellido }}</td>
                        <td>{{ $duenio->correo }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
</body>
</html>