<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApiController::class, 'create'])->name('cadastro.form');


Route::post('/cadastro', [ApiController::class, 'store'])->name('cadastro.store');

// Rota da API para listar todos os usuários
Route::get('/api/usuarios', [ApiController::class, 'index'])->name('api.usuarios');



// Rota da API para atualiziar  todos os usuarios.

Route::put('/cadastro{id}', [ApiController::class, 'update'])->name('cadastro.update');



// Rota da API para deletar todos os usuarios.
Route::delete('/cadastro', [ApiController::class, 'delete'])->name('cadastro.delete');
