<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nombre',
        'horario_id'
    ];

    // Grupo pertenece a horario
    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }

    // Grupo tiene muchas inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
