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


//Route::get('/users',[ApiController::class,'users']);
Route::post('/login',[ApiController::class,'login']);
//Route::post('/register',[ApiController::class,'registerClient']);
//Route::middleware('auth:sanctum')->post('/logout',[ApiController::class,'logout']);

Route::middleware('auth:sanctum')->group(function() {
    
    
    Route::post('/logout',[ApiController::class,'logout']);
   
    
});
Route::get('/user',[ApiController::class,'viewCliente']);

Route::post('/reservarcita',[CitaController::class,'reservarCitaAPI']);
    
//Route::get('/user',[ApiController::class,'viewCliente']);
//route::post('/clientes',[ApiController::class,'aggCliente']);
Route::middleware('auth:sanctum')->get('/mascota',[ApiController::class,'ListarMascotaDelClient']);

Route::get('/mascotas',[ApiController::class,'vistaCrearMas']);
Route::post('/mascotass',[ApiController::class,'aggMasco']);

Route::get('/mostrarcita',[CitaController::class,'mostrarReservaAPI']);
Route::post('/reservarcita',[CitaController::class,'reservarCitaAPI']);
Route::put('/modificarcita',[CitaController::class,'actualizarReservaAPI']);
