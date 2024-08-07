<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trabajo;

class TrabajoController extends Controller
{
    
    public function index()
    {
       $trabajos = Trabajo::orderBy('id')
       ->get();
         return view('Trabajos.HomeTrabajo', compact('trabajos')); 
    }

    public function create()
    {
        return view('Trabajos.CreateTrabajo');
    }

    public function store(Request $request)
    {
        $trabajo = new trabajo();
        $trabajo->nombre_trabajo = $request->trabajo;
        $trabajo->estado = 'activo';
        $trabajo->descripcion = $request->descripcion;
        $trabajo->save();
        return redirect('/trabajos');
    }


    public function show($id)
    {
        $trabajo = Trabajo::find($id);
        return view('Trabajos.ShowTrabajo', compact('trabajo'));

    }

    public function destroy($id)
    {
        $trabajo = Trabajo::find($id);
        $trabajo->delete();
        return redirect('/trabajos');
    }

    public function edit($id)
    {
        $trabajo = Trabajo::find($id);
        return view('Trabajos.EditTrabajo', compact('trabajo'));
    }

    public function update(Request $request, $id)
    {
        $trabajo = Trabajo::find($id);
        $trabajo->nombre_trabajo = $request->nombre_trabajo;
        $trabajo->estado = $request->estado;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->save();
        return redirect('/trabajos');
    }




}