<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $fillable = [
        'turno',
        'paciente_id',
        'proceso_id',
        'modulo_id',
    ];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public function proceso(){
        return $this->belongsTo(Proceso::class);
    }

    public function modulo(){
        return $this->belongsTo(Modulo::class);
    }
}
