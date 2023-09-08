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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nick', 45)->unique('nick');
            $table->string('password', 120);
            $table->enum('status', ['Active', 'Inactive']);
            $table->unsignedTinyInteger('estado_usuario_id')->index('FK_estado_usuario_id');
            $table->string('info_usuarios_NIUP', 20)->index('FK_info_usuarios_NIUP');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
