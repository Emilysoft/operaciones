<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\MaquinariaController;

Route::get('/', function () {
    return view('welcome');
});


// Trabajos

Route::get('/trabajos', [TrabajoController::class, 'index']);
Route::get('/trabajos/create', [TrabajoController::class, 'create']);
Route::post('/trabajos', [TrabajoController::class, 'store']);
Route::get('/trabajos/{id}', [TrabajoController::class, 'show']);
Route::delete('/trabajos/{id}', [TrabajoController::class, 'destroy']);
Route::get('/trabajos/{id}/edit', [TrabajoController::class, 'edit']);
Route::put('/trabajos/{id}',[TrabajoController::class, 'update']);

// sectores

Route::get('/sectores', [SectorController::class, 'index']);
Route::get('/sectores/create', [SectorController::class, 'create']);
Route::post('/sectores', [SectorController::class, 'store']);
Route::get('/sectores/{id}', [SectorController::class, 'show']);
Route::delete('/sectores/{id}', [SectorController::class, 'destroy']);
Route::get('/sectores/{id}/edit', [SectorController::class, 'edit']);
Route::put('/sectores/{id}',[SectorController::class, 'update']);

// Maquinaria

Route::get('/maquinarias', [MaquinariaController::class, 'index']);
Route::get('/maquinarias/create', [MaquinariaController::class, 'create']);
Route::post('/maquinarias', [MaquinariaController::class, 'store']);
Route::get('/maquinarias/{id}', [MaquinariaController::class, 'show']);
Route::delete('/maquinarias/{id}', [MaquinariaController::class, 'destroy']);
Route::get('/maquinarias/{id}/edit', [MaquinariaController::class, 'edit']);
Route::put('/maquinarias/{id}',[MaquinariaController::class, 'update']);




