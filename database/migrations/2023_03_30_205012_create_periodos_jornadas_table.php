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
        Schema::create('periodos_jornadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('periodo_id')->index('FK_periodos_id');
            $table->unsignedTinyInteger('jornada_id')->index('FK_jornadas_id');
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
        Schema::dropIfExists('periodos_jornadas');
    }
};
