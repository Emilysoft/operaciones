<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/trabajos', [TrabajoController::class, 'index']);
Route::get('/trabajos/create', [TrabajoController::class, 'create']);
Route::post('/trabajos', [TrabajoController::class, 'store']);

Route::get('/trabajos/{id}', [TrabajoController::class, 'show']);
Route::delete('/trabajos/{id}', [TrabajoController::class, 'destroy']);

Route::get('/trabajos/{id}/edit', [TrabajoController::class, 'edit']);


Route::put('/trabajos/{id}',[TrabajoController::class, 'update']);
