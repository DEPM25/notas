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
        Schema::create('estudiantes_asignaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario_alumno_id', 20)->index('estudiantes_asignaciones_usuario_alumno_id_foreign_idx');
            $table->unsignedBigInteger('asignacion_id')->index('FK_asignacion_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes_asignaciones');
    }
};
