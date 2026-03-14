<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'clave_institucional',
        'password',
        'rol',
        'activo'
    ];

    // Un usuario puede tener muchos horarios (si es maestro)
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    // Un usuario puede tener muchas inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
