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
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->foreign(['anio_escolar_id'])->references(['id'])->on('anios_escolares');
            $table->foreign(['grupo_id'])->references(['id'])->on('grupos');
            $table->foreign(['usuario_docente_id'])->references(['NIUP'])->on('info_usuarios');
            $table->foreign(['asignatura_id'])->references(['id'])->on('asignaturas');
            $table->foreign(['jornada_id'])->references(['id'])->on('jornadas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->dropForeign('asignaciones_anio_escolar_id_foreign');
            $table->dropForeign('asignaciones_grupo_id_foreign');
            $table->dropForeign('asignaciones_usuario_docente_id_foreign');
            $table->dropForeign('asignaciones_asignatura_id_foreign');
            $table->dropForeign('asignaciones_jornada_id_foreign');
        });
    }
};
