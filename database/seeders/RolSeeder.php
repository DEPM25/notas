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
        $roles = ['Administrador', 'Rector', 'Secretaria', 'Coor.Academico', 'Coor.Disciplinario', 'Profesor', 'Estudiante'];
        $prefijos = ['ADM', 'REC', 'SEC', 'COA', 'COD', 'PRO', 'EST'];
        for ($i = 0; $i<count($roles); $i++) {
            DB::table('roles')->insert([
                'name' => $roles[$i],
                'prefix' => $prefijos[$i],
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }


    }
}
