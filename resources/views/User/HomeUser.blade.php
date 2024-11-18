<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<h1>Este es la pantalla de Usuarios </h1>
    <a href="/usuarios/create">Crear nuevo</a>
    <ul>
        @foreach($usuario as $usuario)
           <li>
               <a href="/usuario/{{$usuario->id}}">
                {{$usuario->id}}
                {{$usuario->nombre}}
               
                
               </a>
           </li>
        @endforeach
        </ul>

</body>
</html>