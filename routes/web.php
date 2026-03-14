<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\MateriaController;

Route::get('/', function () {
    return view('/materias');
});
Route::resource('horarios', HorarioController::class);
Route::resource('grupos', GrupoController::class);
Route::resource('materias', MateriaController::class);