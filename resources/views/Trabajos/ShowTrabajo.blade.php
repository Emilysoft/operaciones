<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El id es {{$trabajo -> id}}</h1>
    <h1>Nombre: {{$trabajo -> nombre_trabajo}} </h1>    
    <p>
        Estado: {{$trabajo ->estado}}
    </p>
    <p> 
        {{$trabajo ->descripcion}}
    </p>
    <a href="/trabajos/{{$trabajo->id}}/edit">Editar Trabajo</a>

    <form action="/trabajos/{{$trabajo->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar
        </button>
    </form>



    <a href="/trabajos">Regresar</a>
</body>
</html>