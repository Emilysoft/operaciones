<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
      <h1>{{$trabajo-> nombre_trabajo}}</h1>
        <form action="/trabajos/{{$trabajo->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre_trabajo">Nombre del Trabajo</label>
            <input type="text" name="nombre_trabajo" value="{{$trabajo->nombre_trabajo}}">
            <br>
            <fieldset>
                <label for="estado">Estado</label>
                <label for="activado">
                <input type="radio" name="estado" value="activo"
                @if($trabajo->estado == 'activo')   
                checked 
                @endif
                >    
                Activado
                </label>
                <label for="desactivado">
                <input type="radio" name="estado" value="desactivado"
                @if($trabajo->estado == 'desactivado')
                checked 
                @endif
                 >
                desactivado
                </label>
            </fieldset>
            <br>
            <label for="descripcion">Descripcion</label>
            
            <textarea name="descripcion" id="descripcion">{{$trabajo->descripcion}}</textarea>


            <br>
            <button type="submit">Actualizar</button>
</body>
</html>