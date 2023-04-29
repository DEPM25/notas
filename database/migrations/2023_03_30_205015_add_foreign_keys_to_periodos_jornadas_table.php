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
        Schema::table('periodos_jornadas', function (Blueprint $table) {
            $table->foreign(['periodo_id'])->references(['id'])->on('periodos');
            $table->foreign(['jornada_id'])->references(['id'])->on('jornadas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periodos_jornadas', function (Blueprint $table) {
            $table->dropForeign('periodos_jornadas_periodo_id_foreign');
            $table->dropForeign('periodos_jornadas_jornada_id_foreign');
        });
    }
};
