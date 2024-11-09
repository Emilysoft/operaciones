<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
      <h1>{{$maquinaria-> id_patente}}</h1>
        <form action="/maquinarias/{{$maquinaria->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="id_tipo_maquinaria">Id_TipoMaquinaria</label>
            <input type="text" name="id_tipo_maquinaria" value="{{$maquinaria->id_tipo_maquinaria}}">
            <br>
            <br>
            <label for="id_chofer">Id_Chofer</label>
            <input type="text" name="id_chofer" value="{{$maquinaria->id_chofer}}">
            <br>
            <br>
            <label for="id_patente">Id_Patente</label>
            <input type="text" name="id_patente" value="{{$maquinaria->id_patente}}">
            <br>
            <br>
            <button type="submit">Actualizar</button>
</body>
</html>