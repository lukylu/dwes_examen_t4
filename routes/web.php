<?php

use App\Http\Controllers\PrendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrendaController::class, 'index']);
Route::get('/prendas/crear', [PrendaController::class, 'create']);
Route::post('/prendas', [PrendaController::class, 'store']);
Route::get('/prendas/{id}', [PrendaController::class, 'show']);
Route::get('/prendas/{id}/editar', [PrendaController::class, 'edit']);
Route::put('/prendas/{id}', [PrendaController::class, 'update']);
Route::get('/prendas/{id}/eliminar', [PrendaController::class, 'confirmDelete']);
Route::delete('/prendas/{id}', [PrendaController::class, 'destroy']);
