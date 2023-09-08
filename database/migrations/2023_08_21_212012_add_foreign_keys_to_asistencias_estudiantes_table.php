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
        Schema::table('asistencias_estudiantes', function (Blueprint $table) {
            $table->foreign(['estudiantes_asignaciones_id'], 'fk_asistencias_estudiantes_estudiantes_asignaciones1')->references(['id'])->on('estudiantes_asignaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asistencias_estudiantes', function (Blueprint $table) {
            $table->dropForeign('fk_asistencias_estudiantes_estudiantes_asignaciones1');
            $table->dropForeign('fk_horario_diario_id');
        });
    }
};
