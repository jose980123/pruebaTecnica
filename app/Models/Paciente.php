<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'nombre',
        'EPS',
        'edad',
        'direccion'
    ];

    public function turno()
    {
        return $this->hasMany(Turno::class);
    }
}
