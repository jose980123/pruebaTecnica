<?php

namespace App\Livewire;

use App\Models\Proceso as ModelsProceso;
use Livewire\Component;

class Proceso extends Component
{
    public $acciones;

    public function render()
    {
        return view('livewire.proceso');
    }
}
