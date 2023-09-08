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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asignatura_id', 6)->index('FK_asignatura_id');
            $table->unsignedBigInteger('grupo_id')->index('FK_grupo_id');
            $table->string('usuario_docente_id', 20)->index('asignaciones_usuario_docente_id_foreign_idx');
            $table->unsignedTinyInteger('jornada_id')->index('FK_jornada_id');
            $table->smallInteger('anio_escolar_id')->index('FK_anio_escolar_id');
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
        Schema::dropIfExists('asignaciones');
    }
};
