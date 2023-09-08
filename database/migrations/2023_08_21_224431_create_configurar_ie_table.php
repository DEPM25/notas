<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configurar_ie', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_colegio', 150);
            $table->string('telefono', 100);
            $table->string('direccion', 100);
            $table->string('correo', 100);
            $table->string('escudo');
            $table->string('bandera');
            $table->string('mision');
            $table->string('vision');
            $table->string('rector', 20)->index('FK_rector_NIUP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurar_ie');
    }
};
