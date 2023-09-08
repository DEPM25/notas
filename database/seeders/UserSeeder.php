<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('info_usuarios')->insert([
            'NIUP' => '1004777560',
            'nombre_1' => 'DIMITRI',
            'nombre_2' => 'ESTEBAN',
            'apellido_1' => 'PEREZ',
            'apellido_2' => 'MARIN',
            'celular_1' => '3157532358',
            'celular_2' => '',
            'correo' => 'dimitri@gmail.com',
            'nacionalidad' => 'COL',
            'genero' => 'MASCULINO',
            'area' => 'URBANA',
            'municipio_id' => 66001,
            'direccion' => 'av.americas # 53-20',
            'tipo_documento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'foto' => 'Foto.jpg'
        ]);

        $user = DB::table('usuarios')->insert([
            'nick' => 'admin',
            'password' => Hash::make('2505'),
            'status' => 'Active',
            'estado_usuario_id' => 1,
            'info_usuarios_NIUP' => '1004777560',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $role = Role::findById(1);

        // Obtener el modelo User correspondiente al ID de usuario insertado
        $userModel = \App\Models\User::find($user);

        // Asignar el rol al usuario
        $userModel->assignRole($role);
    }
}
