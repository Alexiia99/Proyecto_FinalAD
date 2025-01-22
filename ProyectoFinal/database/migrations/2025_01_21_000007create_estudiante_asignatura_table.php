<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('estudiante_asignatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudiante_asignatura');
    }
};