<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;

/* Rura de inicio */
Route::get('/', function () {
    return view('home');
});

/* Ruta para mostar los procesos */
Route::post('/procesos', [ProcesoController::class, 'store'])->name('procesos.store');

/* Tura para mostrar el turno generado y fenerar el turno */
Route::get('/turno', [TurnoController::class, 'index'])->name('turno.index');