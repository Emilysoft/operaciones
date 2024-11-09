<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinaria </title>
</head>
<body>
    <h1>El id de la maquinaria es {{$maquinaria -> id}}</h1>
    <h1>La patente es: {{$maquinaria -> id_patente}} </h1>    
  
   <a href="/maquinarias/{{$maquinaria->id}}/edit">Editar Maquinaria</a>

    <form action="/maquinarias/{{$maquinaria->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar
        </button>
    </form>

    <a href="/maquinarias">Regresar</a>
</body>
</html>