<?php

use App\Http\Controllers\DepartamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//          NOMBRE DEL ENDPOINT     CLASE DE CONTROLADOR        NOMBRE DEL METODO EN EL CONTROLADOR
Route::get('/departamentos',[DepartamentoController::class, 'obtenerDepartamentos']);
Route::get('/deptoporzona/{idzona}',[DepartamentoController::class, 'obtenerDepartamentosPorZona']);
Route::get('/depto/{iddepto}',[DepartamentoController::class, 'obtenerDepartamento']);
Route::post('/crearDepto',[DepartamentoController::class, 'nuevoDepto']);