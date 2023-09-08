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
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign(['estado_usuario_id'])->references(['id'])->on('estados_usuarios');
            $table->foreign(['info_usuarios_NIUP'])->references(['NIUP'])->on('info_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('usuarios_estado_usuario_id_foreign');
            $table->dropForeign('usuarios_info_usuarios_niup_foreign');
        });
    }
};
