<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/home', [ContatoController::class,'index'])->name('contatos.home');
Route::get('/contatos/criar',[ContatoController::class,'criarContato'])->name('contatos.criar');
Route::get('/contatos/{id}',[ContatoController::class,'listarContato'])->name('contatos.mostar');
Route::post('/criar-contato', [ContatoController::class,'salvar'])->name('contatos.salvar');
Route::get('/atualizar-contato/{id}', [ContatoController::class, 'atualizarContato'], 'atualizarContato')->name('contatos.atualizar');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');
