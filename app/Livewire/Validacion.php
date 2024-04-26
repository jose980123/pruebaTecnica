<?php

namespace App\Livewire;

use App\Models\Paciente;
use Livewire\Component;

class Validacion extends Component
{
    public function render()
    {   
        $pacientes = Paciente::all();
        
        return view('livewire.validacion', [
            'pacientes' => $pacientes
        ]);
    }
}
