<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $documentos = ['CÉDULA DE CIUDADANIA', 'CÉDULA DE EXTRANJERIA', 'NÚMERO ESTABLECIDO POR LA SECRETARIA DE EDUCACIÓN', 'PERMISO ESPECIAL DE PERMANENCIA', 'REGISTRO CIVIL', 'TARJETA DE IDENTIDAD', 'VISA', 'PERMISO POR PROTECCIÓN TEMPORAL'];
        $prefijo = ['CC', 'CE', 'NES', 'PEP', 'RC', 'TI', 'V', 'PPT'];

        foreach ($documentos as $index => $documento) {
            DB::table('tipos_documentos')->insert([
                'nombre' => $documento,
                'prefijo' => $prefijo[$index]
            ]);
        }
    }
}
