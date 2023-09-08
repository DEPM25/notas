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
        Schema::table('asistencias_estudiantes', function (Blueprint $table) {
            $table->foreign(['horario_diario_id'], 'fk_horario_diario_id')->references(['id'])->on('horario_diario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asistencias_estudiantes', function (Blueprint $table) {
            $table->dropForeign('fk_horario_diario_id');
        });
    }
};
