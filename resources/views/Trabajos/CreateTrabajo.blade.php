<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pantalla del create</h1>

    <form action="/trabajos" method="POST">
    @csrf


    <label for="nombre">Trabajo</label>
    <input type="text" name="trabajo" id="trabajo" placeholder="Nombre de trabajo">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <br>
    <input type="submit" value="guardar">
    </form>




</body>
</html>