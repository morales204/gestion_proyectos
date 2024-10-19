<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');

Route::get('pendientes', [ProyectoController::class, 'pendientes'])->name('proyectos.pendientes');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
