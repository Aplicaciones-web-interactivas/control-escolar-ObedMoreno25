<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EntregaController;

Route::get('/', function () {
    return redirect('/materias');
});
Route::resource('horarios', HorarioController::class);
Route::resource('grupos', GrupoController::class);
Route::resource('materias', MateriaController::class);
Route::resource('inscripciones', InscripcionController::class);
Route::resource('tareas', TareaController::class);
Route::resource('entregas', EntregaController::class);
Route::get('tareas/{id}/entregas', [TareaController::class, 'entregas'])
->name('tareas.entregas');