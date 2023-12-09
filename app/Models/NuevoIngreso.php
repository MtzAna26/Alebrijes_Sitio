<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class NuevoIngreso extends Model
{
    use Searchable;
    protected $fillable = [
        'fecha_consulta',
        'nombre_propietario',
        'nombre_mascota',
        'direccion',
        'telefono',
        'sexo',
        'raza',
        'especie',
        'color_mascota',
        'senas_particulares',
        'alergias',
        'esterilizado',
        'enfermedades_previas',
        'notas',
    ];

    protected $casts = [
        'esterilizado' => 'boolean',
    ];

    // Relación muchos a uno con Propietario
    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'nombre_propietario', 'nombre_propietario');
    }
}
