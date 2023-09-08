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
        Schema::create('horario', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->unsignedTinyInteger('jornada_id')->index('FK_jornada_id');
            $table->unsignedSmallInteger('horas_dia');
            $table->unsignedSmallInteger('horas_clase');
            $table->unsignedSmallInteger('horas_descanso');
            $table->unsignedSmallInteger('count_descanso');
            $table->string('horario', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario');
    }
};
