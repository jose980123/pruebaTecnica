<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::controller(ProcesoController::class)->group(function () {
    Route::post('/procesos', 'store')->name('procesos.store');
});

Route::controller(TurnoController::class)->group(function(){
    Route::get('/turno', 'index')->name('turno.index');
});