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
        Schema::table('horario', function (Blueprint $table) {
            $table->foreign(['jornada_id'], 'FK_jornada_id')->references(['id'])->on('jornadas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horario', function (Blueprint $table) {
            $table->dropForeign('horario_jornada_id_foreign');
        });
    }
};
