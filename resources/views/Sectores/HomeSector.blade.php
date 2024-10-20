<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sector</title>
</head>
<body>
    <h1>Este es la pantalla de Sectores</h1>
    <a href="/sectores/create">Crear nuevo</a>
    <ul>
        @foreach($sectores as $sector)
           <li>
               <a href="/sectores/{{$sector->id}}">
                {{$sector->nombre_sector}}
               </a>
           </li>
        @endforeach
        </ul>

</body>
</html>