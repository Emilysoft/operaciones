<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Create</title>
</head>
<body>
<h1>Crear Usuario</h1>    

<form action="/usuarios" method="POST">
@csrf


<label for="rut">Rut</label>
<input type="text" name="rut" id="rut">
<br>
<label for="dv">DV</label>
<input type="text" name="dv" id="dv">
<br>
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre">
<br>
<br>
<label for="apellido_p">Apellido Paterno</label>
<input type="text" name="apellido_p" id="apellido_p">
<br>
<br>
<label for="apellido_m">Apellido Materno</label>
<input type="text" name="apellido_m" id="apellido_m">
<br>
<br>
<label for="email">Email</label>
<input type="email" name="email">
<br>
<br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono">
<br>
<br>
<label for="rsh">RSH</label>
<input type="text" name="rsh" id="rsh">
<br>
<br>
<label for="direccion">Direccion</label>
<input type="text" name="direccion" id="direccion">
<br>
<br>
<label for="sector">Sector</label>
<select id="sector" name="sector">
        @foreach($sectores as $sectores)
            <option value="{{$sectores->id}}"> {{ $sectores->nombre_sector }}</option>
        @endforeach
    </select>
<br>
<br>
<input type="submit" value="Guardar">
</form>

</body>
</html>