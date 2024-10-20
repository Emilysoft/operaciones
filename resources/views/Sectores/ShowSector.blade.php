<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El id es {{$sector -> id}}</h1>
    <h1>Nombre: {{$sector -> nombre_sector}} </h1>    
  
    <a href="/sectores/{{$sector->id}}/edit">Editar sectores</a>

    <form action="/sectores/{{$sector->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar
        </button>
    </form>



    <a href="/sectores">Regresar</a>
</body>
</html>