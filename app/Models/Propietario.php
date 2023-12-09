<?php
//namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Propietario extends Model
{
    use HasFactory;

    use Searchable;

    protected $fillable = ['fecha_consulta','nombre_propietario', 'nombre_mascota', 'direccion', 'telefono'];

    // Relación uno a muchos con NuevoIngreso
    

}
