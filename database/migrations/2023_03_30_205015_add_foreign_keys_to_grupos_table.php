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
        Schema::table('grupos', function (Blueprint $table) {
            $table->foreign(['jornada_id'])->references(['id'])->on('jornadas');
            $table->foreign(['grado_id'])->references(['id'])->on('grados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupos', function (Blueprint $table) {
            $table->dropForeign('grupos_jornada_id_foreign');
            $table->dropForeign('grupos_grado_id_foreign');
        });
    }
};
