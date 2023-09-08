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
        Schema::create('info_usuarios_discapacidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('info_usuarios_NIUP', 20)->index('FK_info_usuarios_NIUP');
            $table->unsignedTinyInteger('discapacidad_id')->index('FK_discapacidad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_usuarios_discapacidad');
    }
};
