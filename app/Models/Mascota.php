<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Mascota extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'fecha_consulta',
        'nombre_mascota',
        'nombre_propietario',
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
}
