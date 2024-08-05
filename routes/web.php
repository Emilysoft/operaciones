<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/trabajos', [TrabajoController::class, 'index']);
Route::get('/trabajos/create', [TrabajoController::class, 'create']);
Route::post('/trabajos', [TrabajoController::class, 'store']);
