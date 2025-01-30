<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\EstudianteAsignaturaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\AulaProfesorAsignaturaController;
use App\Http\Controllers\LibroController;


Route::apiResource('estudiantes', EstudianteController::class);
Route::apiResource('profesores', ProfesorController::class);
Route::apiResource('asignaturas', AsignaturaController::class);
Route::apiResource('calificaciones', CalificacionController::class);
Route::apiResource('estudiante-asignatura', EstudianteAsignaturaController::class);
Route::apiResource('aulas', AulaController::class);
Route::apiResource('asistencias', AsistenciaController::class);
Route::apiResource('aula-profesor-asignatura', AulaProfesorAsignaturaController::class);
Route::apiResource('libros', LibroController::class);

Route::get('test', [ProfesorController::class, 'test']);