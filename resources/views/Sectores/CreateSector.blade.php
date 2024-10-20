<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pantalla del create</h1>

    <form action="/sectores" method="POST">
    @csrf


    <label for="nombre">Sectores</label>
    <input type="text" name="sector" id="sector" placeholder="Nombre del sector">
    <br>
    <br>
    <input type="submit" value="guardar">
    </form>


</body>
</html>