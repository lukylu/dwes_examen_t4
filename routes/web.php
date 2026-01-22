<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

Route::get('/', [PrendaController::class, 'index'])->name('prendas.index');
Route::get('/prendas/crear', [PrendaController::class, 'create'])->name('prendas.create');
Route::post('/prendas', [PrendaController::class, 'store'])->name('prendas.store');
Route::get('/prendas/{prenda}', [PrendaController::class, 'show'])->name('prendas.show');
Route::get('/prendas/{prenda}/editar', [PrendaController::class, 'edit'])->name('prendas.edit');
Route::put('/prendas/{prenda}', [PrendaController::class, 'update'])->name('prendas.update');
Route::get('/prendas/{prenda}/eliminar', [PrendaController::class, 'confirmDelete'])->name('prendas.confirmDelete');
Route::delete('/prendas/{prenda}', [PrendaController::class, 'destroy'])->name('prendas.destroy');
