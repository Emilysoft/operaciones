<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinaria</title>
</head>
<body>
<h1>Este es la pantalla de Maquinarias </h1>
    <a href="/maquinarias/create">Crear nuevo</a>
    <ul>
        @foreach($maquinaria as $maquinaria)
           <li>
               <a href="/maquinarias/{{$maquinaria->id}}">
                {{$maquinaria->id}}
                {{$maquinaria->id_maquinaria}}
                {{$maquinaria->id_patente}}
                {{$maquinaria->id_chofer}}
                
               </a>
           </li>
        @endforeach
        </ul>

</body>
</html>