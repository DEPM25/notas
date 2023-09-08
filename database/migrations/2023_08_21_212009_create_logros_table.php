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
        Schema::create('logros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->unsignedBigInteger('asignacion_id')->index('FK_asignacion_id');
            $table->unsignedTinyInteger('periodo_id')->index('FK_periodo_id');
            $table->string('valor', 5)->nullable();
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
        Schema::dropIfExists('logros');
    }
};
