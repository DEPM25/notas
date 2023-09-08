<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['nombre' => 'Amazonas', 'id' => '91'],
            ['nombre' => 'Antioquia', 'id' => '05'],
            ['nombre' => 'Arauca', 'id' => '81'],
            ['nombre' => 'Atlántico', 'id' => '08'],
            ['nombre' => 'Bogota D.C.', 'id' => '11'],
            ['nombre' => 'Bolívar', 'id' => '13'],
            ['nombre' => 'Boyacá', 'id' => '15'],
            ['nombre' => 'Caldas', 'id' => '17'],
            ['nombre' => 'Caquetá', 'id' => '18'],
            ['nombre' => 'Casanare', 'id' => '85'],
            ['nombre' => 'Cauca', 'id' => '19'],
            ['nombre' => 'Cesar', 'id' => '20'],
            ['nombre' => 'Chocó', 'id' => '27'],
            ['nombre' => 'Córdoba', 'id' => '23'],
            ['nombre' => 'Cundinamarca', 'id' => '25'],
            ['nombre' => 'Guainía', 'id' => '94'],
            ['nombre' => 'Guaviare', 'id' => '95'],
            ['nombre' => 'Huila', 'id' => '41'],
            ['nombre' => 'La Guajira', 'id' => '44'],
            ['nombre' => 'Magdalena', 'id' => '47'],
            ['nombre' => 'Meta', 'id' => '50'],
            ['nombre' => 'Nariño', 'id' => '52'],
            ['nombre' => 'Norte de Santander', 'id' => '54'],
            ['nombre' => 'Putumayo', 'id' => '86'],
            ['nombre' => 'Quindío', 'id' => '63'],
            ['nombre' => 'Risaralda', 'id' => '66'],
            ['nombre' => 'San Andrés y Providencia', 'id' => '88'],
            ['nombre' => 'Santander', 'id' => '68'],
            ['nombre' => 'Sucre', 'id' => '70'],
            ['nombre' => 'Tolima', 'id' => '73'],
            ['nombre' => 'Valle del Cauca', 'id' => '76'],
            ['nombre' => 'Vaupés', 'id' => '97'],
            ['nombre' => 'Vichada', 'id' => '99'],
        ];

        foreach ($departments as $department) {
            $id = $department['id'];
            $nombre = $department['nombre'];

            DB::table('departamentos')->insert([
                'id' => $id,
                'nombre' => $nombre
            ]);
        }
    }
}
