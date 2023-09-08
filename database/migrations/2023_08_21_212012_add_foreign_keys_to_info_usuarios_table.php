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
        Schema::table('info_usuarios', function (Blueprint $table) {
            $table->foreign(['municipio_id'])->references(['id'])->on('municipios');
            $table->foreign(['tipo_documento_id'])->references(['id'])->on('tipos_documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_usuarios', function (Blueprint $table) {
            $table->dropForeign('info_usuarios_municipio_id_foreign');
            $table->dropForeign('info_usuarios_tipo_documento_id_foreign');
        });
    }
};
