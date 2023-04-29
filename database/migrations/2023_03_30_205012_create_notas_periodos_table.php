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
        Schema::create('notas_periodos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudiante_asig_id')->index('FK_estudiante_asig_id');
            $table->smallInteger('anio_escolar_id')->index('FK_anio_escolar_id');
            $table->unsignedBigInteger('usuario_estudiante_id')->index('FK_usuario_estudiante_id');
            $table->integer('nota_TP1')->nullable();
            $table->double('nota_P1_1')->nullable();
            $table->double('nota_P1_2')->nullable();
            $table->double('nota_P1_3')->nullable();
            $table->double('nota_P1_4')->nullable();
            $table->double('nota_P1_R')->nullable();
            $table->double('nota_P1_P')->nullable();
            $table->string('nota_descripcion_P1', 45)->nullable()->default('Cualitativas');
            $table->integer('nota_TP2')->nullable();
            $table->double('nota_P2_1')->nullable();
            $table->double('nota_P2_2')->nullable();
            $table->double('nota_P2_3')->nullable();
            $table->double('nota_P2_4')->nullable();
            $table->double('nota_P2_R')->nullable();
            $table->double('nota_P2_P')->nullable();
            $table->char('nota_descripcion_P2', 2)->nullable();
            $table->integer('nota_TP3')->nullable();
            $table->double('nota_P3_1')->nullable();
            $table->double('nota_P3_2')->nullable();
            $table->double('nota_P3_3')->nullable();
            $table->double('nota_P3_4')->nullable();
            $table->double('nota_P3_R')->nullable();
            $table->double('nota_P3_P')->nullable();
            $table->string('nota_descripcion_P3', 45)->nullable();
            $table->integer('nota_TP4')->nullable();
            $table->double('nota_P4_1')->nullable();
            $table->double('nota_P4_2')->nullable();
            $table->double('nota_P4_3')->nullable();
            $table->double('nota_P4_4')->nullable();
            $table->double('nota_P4_R')->nullable();
            $table->double('nota_P4_P')->nullable();
            $table->string('nota_descripcion_P4', 45)->nullable();
            $table->integer('nota_Tnotas')->nullable();
            $table->double('nota_fin')->nullable();
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
        Schema::dropIfExists('notas_periodos');
    }
};
