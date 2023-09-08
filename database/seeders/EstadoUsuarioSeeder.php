<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $estados_usuario = ['Inscrito', 'Matriculado', 'Graduado', 'Retirado', 'Desertor', 'Promocion'];

        foreach ($estados_usuario as $estado_usuario) {
            DB::table('estados_usuarios')->insert([
                'nombre' => $estado_usuario
            ]);
        }
    }
}
