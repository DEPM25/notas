<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Administrador', 'Rector', 'Secretaria', 'Coordinador', 'Profesor', 'Estudiante'];
        $prefijos = ['ADM', 'REC', 'SEC', 'COO', 'PRO', 'EST'];
        for ($i = 0; $i<count($roles); $i++) {
            DB::table('roles')->insert([
                'nombre' => $roles[$i],
                'prefijo' => $prefijos[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
