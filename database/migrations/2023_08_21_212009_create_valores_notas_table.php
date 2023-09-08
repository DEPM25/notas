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
        Schema::create('valores_notas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('valor_nota')->nullable();
            $table->string('nota_descripcion', 3)->nullable();
            $table->unsignedBigInteger('notas_periodos_id')->index('fk_valores_notas_notas_periodos_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valores_notas');
    }
};
