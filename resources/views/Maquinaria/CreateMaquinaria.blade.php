<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinaria | create</title>
</head>
<body>
    
<h2>Crear Maquinaria</h2>
<form action="/maquinarias" method="POST">
    @csrf


    <label for="nombre">Id_Maquinaria</label>
    <input type="text" name="id_tipo_maquinaria" id="id_tipo_maquinaria" > <!--   Esto deberia seleccionarse desde una tabla de maquinarias -->
    <br>
    <br>
    <label for="nombre">Id_Chofer</label>
    <input type="text" name="id_chofer" id="id_chofer"> <!--   Esto deberia seleccionarse desde una tabla chofer -->
    <br>
    <br>
    <label for="patente">Id_Patente</label>
    <input type="text" name="id_patente" id="id_patente"> <!--   Esto deberia seleccionarse desde una tabla chofer -->
    <br>
    <br>
    
    <input type="submit" value="guardar">
    </form>






</body>
</html>