<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo</title>
</head>
<body>
    <h1>Este es la pantalla de Trabajos</h1>

    <ul>
        @foreach($trabajos as $trabajo)
           <li>
               <a href="/trabajos/{{$trabajo->id}}">
                {{$trabajo->nombre_trabajo}}
               </a>
           </li>
        @endforeach
        </ul>

</body>
</html>
