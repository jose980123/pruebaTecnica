<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            'documento' => '1062682803',
            'nombre' => 'José López Guzmán',
            'EPS' => 'MutualSer',
            'edad' => 26,
            'direccion' => 'k2-130',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pacientes')->insert([
            'documento' => '1003033506',
            'nombre' => 'Geraldine Petro Fuentes',
            'EPS' => 'MutualSer',
            'edad' => 24,
            'direccion' => 'Cienegueta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pacientes')->insert([
            'documento' => '26177592',
            'nombre' => 'Nelfy Guzmán Garces',
            'EPS' => 'Nueva EPS',
            'edad' => 64,
            'direccion' => 'k2-130',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pacientes')->insert([
            'documento' => '78024906',
            'nombre' => 'José Angel López Henriquez',
            'EPS' => 'Nueva EPS',
            'edad' => 54,
            'direccion' => 'k2-130',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
