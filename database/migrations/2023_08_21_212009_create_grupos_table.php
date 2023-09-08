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
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('codigo', 6)->unique();
            $table->string('nombre', 40);
            $table->unsignedBigInteger('grado_id')->index('FK_grados_id');
            $table->unsignedTinyInteger('jornada_id')->index('FK_jornada_id');
            $table->char('anio', 4);
            $table->timestamps();
            $table->string('usuarios_docente_director_id', 20)->index('FK_usuarios_docente_director_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
};
