<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'siglas',
    ];

    public function turno()
    {
        return $this->hasMany(Turno::class);
    }
}
