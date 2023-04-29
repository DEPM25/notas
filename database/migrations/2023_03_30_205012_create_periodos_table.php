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
        Schema::create('periodos', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('num_periodos', 5);
            $table->smallInteger('anio_escolar_id')->index('FK_anio_escolar_id');
            $table->string('porcentaje_periodo_1', 5)->default('0');
            $table->string('porcentaje_periodo_2', 5)->nullable()->default('0');
            $table->string('porcentaje_periodo_3', 5)->nullable()->default('0');
            $table->string('porcentaje_periodo_4', 5)->nullable()->default('0');
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
        Schema::dropIfExists('periodos');
    }
};
