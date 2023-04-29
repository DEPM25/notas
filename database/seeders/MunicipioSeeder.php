<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $municipios = json_decode(file_get_contents(database_path('json/municipios.json')), true);

        foreach ($municipios as $municipio) {
            DB::table('municipios')->insert($municipio);
        }
    }
}
