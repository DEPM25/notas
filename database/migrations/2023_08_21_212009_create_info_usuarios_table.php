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
        Schema::create('info_usuarios', function (Blueprint $table) {
            $table->string('NIUP', 20)->primary();
            $table->string('nombre_1', 30);
            $table->string('nombre_2', 30)->nullable();
            $table->string('apellido_1', 30);
            $table->string('apellido_2', 30)->nullable();
            $table->string('celular_1', 15)->nullable();
            $table->string('celular_2', 15)->nullable();
            $table->string('correo', 90)->nullable();
            $table->char('nacionalidad', 3)->nullable();
            $table->string('genero', 10)->nullable();
            $table->string('area', 7)->nullable();
            $table->unsignedBigInteger('municipio_id')->nullable()->index('FK_municipio_id');
            $table->string('direccion', 50)->nullable();
            $table->unsignedTinyInteger('tipo_documento_id')->nullable()->index('FK_tipo_documento_id');
            $table->timestamps();
            $table->string('foto', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_usuarios');
    }
};
