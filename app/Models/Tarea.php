<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Entrega;
use App\Models\Grupo;

class Tarea extends Model
{
    protected $fillable = [
    'grupo_id',
    'titulo',
    'descripcion',
    'fecha_entrega'
];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }
}
