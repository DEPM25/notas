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
            $table->foreign(['grado_id'])->references(['id'])->on('grados');
            $table->foreign(['usuarios_docente_director_id'])->references(['NIUP'])->on('info_usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::table('grupos', function (Blueprint $table) {
            $table->dropForeign('grupos_grado_id_foreign');
            $table->dropForeign('grupos_usuarios_docente_director_id_foreign');
            $table->dropForeign('grupos_jornada_id_foreign');
        });
    }
};
