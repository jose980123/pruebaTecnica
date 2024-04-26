<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Proceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcesoController extends Controller
{
    public function store(Request $request){

        /* Validando la informacion que s eingresa en el input */
        $request->validate([
            'documento' => 'required|numeric'
        ]);

        /* llamando todos los procesos de base de datos */
        $acciones = Proceso::all();

        /* Se hace una consulta para saber si el documento del request es el mismo que de la base de datos */
        $paciente = Paciente::where('documento', $request->documento)->first();

        /* Se crea la validacion para saber si usuario esta registrado o no */
        if ($paciente) {
            /* En caso dado sea igual, los mandara a la vista, justo con esas variables */
            return view('procesos', [
                'acciones' => $acciones,
                'paciente' => $paciente
            ]);
        } else {
            /* En caso dado no este registrado se devuelve a la pagina principal y moestrara ese mensaje */
            return redirect()->back()->with('mensaje', 'Documento no encontrado');
        }
    }
}
