<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    protected $fillable = [
        'grupo_id',
        'usuario_id',
        'calificacion'
    ];

    // Inscripción pertenece a grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    // Inscripción pertenece a usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
