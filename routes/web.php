<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', [HolaController::class, 'index'] )
->name('hola');
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos/store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos/editar/{codigo}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos/update/{codigo}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos/destroy/{codigo}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');