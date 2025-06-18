<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/ofrecemos', [PageController::class, 'ofrecemos'])->name('ofrecemos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/servicios/equipos', [PageController::class, 'equipos'])->name('servicios.equipos');
Route::get('/servicios/explotacion', [PageController::class, 'explotacion'])->name('servicios.explotacion');
Route::get('/servicios/renting', [PageController::class, 'renting'])->name('servicios.renting');
Route::get('/servicios/aparatologia', [PageController::class, 'aparatologia'])->name('servicios.aparatologia');
Route::get('/servicios/alquiler', [PageController::class, 'alquiler'])->name('servicios.alquiler');
Route::get('/servicios/tecnico', [PageController::class, 'tecnico'])->name('servicios.tecnico');