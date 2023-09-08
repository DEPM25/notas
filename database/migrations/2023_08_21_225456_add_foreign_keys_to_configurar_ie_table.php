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
        Schema::table('configurar_ie', function (Blueprint $table) {
            $table->foreign(['rector'], 'FK_rector_NIUP')->references(['NIUP'])->on('info_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configurar_ie', function (Blueprint $table) {
            $table->dropForeign('FK_rector_NIUP');
        });
    }
};
