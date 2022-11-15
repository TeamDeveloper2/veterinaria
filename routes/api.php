<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CitaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/users',[ApiController::class,'users']);
Route::post('/login',[ApiController::class,'login']);
//Route::middleware('auth:sanctum')->get('/client',[ApiController::class,'ListarCliente']);

Route::middleware(['auth:api'])-> group(function(){
    Route::get('/user',[ApiController::class,'ListarCliente']);
});
//route::post('/clientes',[ApiController::class,'aggCliente']);
Route::middleware('auth:sanctum')->get('/mascota',[ApiController::class,'ListarMascotaDelClient']);

Route::get('/mascotas',[ApiController::class,'vistaCrearMas']);
Route::post('/mascotass',[ApiController::class,'aggMascote']);

Route::get('/mostrarcita',[CitaController::class,'mostrarReservaAPI']);
Route::post('/reservarcita',[CitaController::class,'reservarCitaAPI']);
Route::put('/modificarcita',[CitaController::class,'actualizarReservaAPI']);
