<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'dias',
        'hora_inicio',
        'hora_fin',
        'materia_id',
        'usuario_id'
    ];

    // Horario pertenece a materia
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    // Horario pertenece a un maestro (usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Horario tiene muchos grupos
    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
