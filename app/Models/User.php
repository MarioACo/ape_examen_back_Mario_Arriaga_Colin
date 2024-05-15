<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'estado_civil',
        'fecha_nacimiento'
    ];

    public function domicilio():HasMany
    {
        return $this->hasMany(UserDomicilio::class);
    }

}
