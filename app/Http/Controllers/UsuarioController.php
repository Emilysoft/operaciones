<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\Sector;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario= usuario::orderBy('id')
        ->get();
          return view('User.HomeUser', compact('usuario')); 
     }
 
     public function create()
     {
         $sectores = Sector::orderBy('id')
         ->get();
         return view('User.CreateUser', compact('sectores'));
     }
 
     public function store(Request $request)
     {
         $user = new usuario();
         $user->rut = $request->rut;
         $user->dv = $request->dv;
         $user->nombre = $request->nombre;
         $user->apellido_paterno = $request->apellido_p;
         $user->apellido_materno = $request->apellido_m;
         $user->email = $request->email;
         $user->telefono = $request->telefono;
         $user->direccion = $request->direccion; 
         $user->rsh = $request->rsh;
         $user->estado ="activo";
         $user->sector_id = $request->sector;
         $user->save();
         return redirect('/usuarios');
     }
}
