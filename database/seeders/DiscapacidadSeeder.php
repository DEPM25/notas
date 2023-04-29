<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscapacidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('discapacidades')->delete();

        // DB::statement('ALTER TABLE discapacidades AUTO_INCREMENT = 1;');

        $discapacidades = ['Fisica', 'Auditiva', 'Visual', 'Intelectual', 'Psicosocial', 'TEA', 'Otro', 'Ninguno'];

        foreach ($discapacidades as $discapacidad) {
            DB::table('discapacidades')->insert([
                'nombre' => $discapacidad
            ]);
        }
    }
}
