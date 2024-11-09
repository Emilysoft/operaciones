<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquinaria;

class MaquinariaController extends Controller
{
    public function index()
    {
       $maquinaria= Maquinaria::orderBy('id')
       ->get();
         return view('Maquinaria.HomeMaquinaria', compact('maquinaria')); 
    }

    public function create()
    {
        return view('Maquinaria.CreateMaquinaria');
    }

    public function store(Request $request)
    {
        $maquinaria = new maquinaria();
        $maquinaria->id_tipo_maquinaria = $request->id_tipo_maquinaria;
        $maquinaria->id_chofer = $request->id_chofer;
        $maquinaria->id_patente = $request->id_patente;
        $maquinaria-> estado = 'activo';
        $maquinaria->save();
        return redirect('/maquinarias');
    }

    public function show($id)
    {
        $maquinaria = Maquinaria::findOrFail($id);
        return view('Maquinaria.ShowMaquinaria', compact('maquinaria'));
    }

    public function destroy($id)
    {
        $maquinaria = Maquinaria::find($id);
        $maquinaria->delete();
        return redirect('/maquinarias');
    }
    
    public function edit($id)
    {
        $maquinaria = Maquinaria::find($id);
        return view('Maquinaria.EditMaquinaria', compact('maquinaria'));
    }

    public function update(Request $request, $id)
    {
        $maquinaria = Maquinaria::find($id);
        $maquinaria->id_tipo_maquinaria = $request->id_tipo_maquinaria;
        $maquinaria->id_chofer = $request->id_chofer;
        $maquinaria->id_patente = $request->id_patente;
        $maquinaria->save();
        return redirect('/maquinarias');
    }



}
