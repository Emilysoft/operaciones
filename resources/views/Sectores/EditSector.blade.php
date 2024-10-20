<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
      <h1>{{$sector-> nombre_sector}}</h1>
        <form action="/sectores/{{$sector->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre_sector">Nombre del sector</label>
            <input type="text" name="nombre_sector" value="{{$sector->nombre_sector}}">
            <br>
            <br>
            <button type="submit">Actualizar</button>
</body>
</html>