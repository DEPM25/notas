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
        Schema::table('valores_notas', function (Blueprint $table) {
            $table->foreign(['notas_periodos_id'], 'fk_valores_notas_notas_periodos')->references(['id'])->on('notas_periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valores_notas', function (Blueprint $table) {
            $table->dropForeign('fk_valores_notas_notas_periodos');
        });
    }
};
