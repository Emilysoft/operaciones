<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sector;

class SectorController extends Controller
{
  
    public function index()
    {
       $sectores= Sector::orderBy('id')
       ->get();
         return view('Sectores.HomeSector', compact('sectores')); 
    }



    public function create()
    {
        return view('Sectores.CreateSector');
    }

    public function store(Request $request)
    {
        $sector = new sector();
        $sector->nombre_sector = $request->sector;
        $sector->save();
        return redirect('/sectores');
    }

    public function show($id)
    {
        $sector = sector::find($id);
        return view('Sectores.ShowSector', compact('sector'));

    }

    public function destroy($id)
    {
        $sector = sector::find($id);
        $sector->delete();
        return redirect('/sectores');
    }

    public function edit($id)
    {
        $sector = sector::find($id);
        return view('Sectores.EditSector', compact('sector'));
    }

    public function update(Request $request, $id)
    {
        $sector = sector::find($id);
        $sector->nombre_sector = $request->nombre_sector;
        $sector->save();
        return redirect('/sectores');
    }



}