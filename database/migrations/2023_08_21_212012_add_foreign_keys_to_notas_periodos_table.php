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
        Schema::table('notas_periodos', function (Blueprint $table) {
            $table->foreign(['anio_escolar_id'])->references(['id'])->on('anios_escolares');
            $table->foreign(['periodo_id'])->references(['id'])->on('periodos');
            $table->foreign(['estudiante_asig_id'])->references(['id'])->on('estudiantes_asignaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas_periodos', function (Blueprint $table) {
            $table->dropForeign('notas_periodos_anio_escolar_id_foreign');
            $table->dropForeign('notas_periodos_periodo_id_foreign');
            $table->dropForeign('notas_periodos_estudiante_asig_id_foreign');
        });
    }
};
