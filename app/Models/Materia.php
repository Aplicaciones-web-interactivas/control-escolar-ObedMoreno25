<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'nombre',
        'clave'
    ];

    // Una materia puede tener muchos horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
