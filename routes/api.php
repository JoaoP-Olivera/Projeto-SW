<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\EmpresaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::namespace('App\Http\Controllers\API')->group(function(){
    Route::get('/contatos', [ApiController::class,'listarContatos']);
    Route::get('/contato/{id}', [ApiController::class, 'listarContato']);
    Route::post('/criar-contato/',[ApiController::class,'criarContato']);
    Route::delete('/deletar-contato/{id}', [ApiController::class, 'deletarContato']);
    Route::patch('/atualizar-contato/{id}', [ApiController::class, 'atualizarContato']);
    Route::get('/empresas', [EmpresaApiController::class,'listarEmpresas']);
    Route::get('/empresa/{id}', [EmpresaApiController::class, 'listarEmpresa']);
    Route::post('/criar-empresa/',[EmpresaApiController::class,'criarEmpresa']);
    Route::delete('/deletar-empresa/{id}', [EmpresaApiController::class, 'deletarEmpresa']);
    Route::patch('/atualizar-empresa/{id}', [EmpresaApiController::class, 'atualizarEmpresa']);
    });
