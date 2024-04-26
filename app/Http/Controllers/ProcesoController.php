<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Proceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcesoController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'documento' => 'required|numeric'
        ]);

        $acciones = Proceso::all();

        $paciente = Paciente::where('documento', $request->documento)->first();

        if ($paciente) {
            return view('procesos', [
                'acciones' => $acciones,
                'paciente' => $paciente
            ]);
        } else {
            return redirect()->back()->with('mensaje', 'Documento no encontrado');
        }
    }
}
