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
        Schema::create('asistencias_estudiantes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->unsignedBigInteger('estudiantes_asignaciones_id')->index('fk_asistencias_estudiantes_estudiantes_asignaciones1_idx');
            $table->tinyInteger('asitido')->nullable();
            $table->dateTime('hora_fecha_asistido')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias_estudiantes');
    }
};
