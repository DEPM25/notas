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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->string('id', 6)->primary();
            $table->unsignedBigInteger('nombre_asignatura_id')->index('FK_nombre_asignatura_id');
            $table->unsignedBigInteger('area_id')->index('FK_area_id');
            $table->timestamps();
            $table->tinyInteger('int_semanal')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaturas');
    }
};
