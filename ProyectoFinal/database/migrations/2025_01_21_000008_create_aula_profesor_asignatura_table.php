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
        Schema::create('aula_profesor_asignatura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aula_id')->constrained('aulas');
            $table->foreignId('profesor_id')->constrained('profesores'); // Cambiado de profesors a profesores
            $table->foreignId('materia_id')->constrained('asignaturas');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_profesor_asignatura');
    }
};
