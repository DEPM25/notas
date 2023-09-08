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
        Schema::table('info_usuarios_discapacidad', function (Blueprint $table) {
            $table->foreign(['discapacidad_id'])->references(['id'])->on('discapacidades');
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
        Schema::table('info_usuarios_discapacidad', function (Blueprint $table) {
            $table->dropForeign('info_usuarios_discapacidad_discapacidad_id_foreign');
            $table->dropForeign('info_usuarios_discapacidad_info_usuarios_niup_foreign');
        });
    }
};
