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
        Schema::table('horario_diario', function (Blueprint $table) {
            $table->foreign(['asignacion_id'], 'fk_horario_diario_asignacion')->references(['id'])->on('asignaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horario_diario', function (Blueprint $table) {
            $table->dropForeign('fk_horario_diario_asignacion');
        });
    }
};
