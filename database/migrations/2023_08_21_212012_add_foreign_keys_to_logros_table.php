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
        Schema::table('logros', function (Blueprint $table) {
            $table->foreign(['asignacion_id'])->references(['id'])->on('asignaciones');
            $table->foreign(['periodo_id'], 'logros_periodos_id_foreign')->references(['id'])->on('periodos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logros', function (Blueprint $table) {
            $table->dropForeign('logros_asignacion_id_foreign');
            $table->dropForeign('logros_periodos_id_foreign');
        });
    }
};
