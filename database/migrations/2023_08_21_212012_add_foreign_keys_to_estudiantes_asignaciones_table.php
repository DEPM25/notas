<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estudiantes_asignaciones', function (Blueprint $table) {
            $table->foreign(['asignacion_id'])->references(['id'])->on('asignaciones');
            $table->foreign(['usuario_alumno_id'])->references(['NIUP'])->on('info_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiantes_asignaciones', function (Blueprint $table) {
            $table->dropForeign('estudiantes_asignaciones_asignacion_id_foreign');
            $table->dropForeign('estudiantes_asignaciones_usuario_alumno_id_foreign');
        });
    }
};
