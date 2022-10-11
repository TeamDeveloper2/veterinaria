<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CirugiaController;
use App\Http\Controllers\CitaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [CitaController::class, 'index'])->name('registrar');
Route::post('/contact_post', [CitaController::class, 'contact_post']);

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:1'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'showadminHome'])->name('admin.Home');

    //***************MASCOTA********************************************** */

    Route::get('/admin/mascota',[MascotaController::class,'index'])->name('homem');
    Route::get('/admin/mascota/mostrar/{codmascota}',[MascotaController::class,'mostrar']);
    Route::get('/admin/mascota/modificar/{codmascota}',[MascotaController::class,'edit'])->name('homemm');
    Route::post('/admin/mascota/update/{codmascota}',[MascotaController::class,'update']);
    Route::get('/admin/mascota/create',[MascotaController::class,'create'])->name('homenew');
    Route::post('/admin/mascota/registro',[MascotaController::class,'store'])->name('homereg');

    //******************************************************************************************* */
    //******************************CLIENTE******************************************************* */
    Route::get('/admin/cliente',[ClienteController::class,'index'])->name('homec');
    Route::get('/admin/cliente/mostrar/{id}',[ClienteController::class,'mostrar']);
    Route::get('/admin/cliente/modificar/{id}',[ClienteController::class,'edit'])->name('homecm');
    Route::post('/admin/cliente/update/{id}',[ClienteController::class,'update']);
    Route::get('/admin/cliente/create',[ClienteController::class,'create'])->name('homecnew');
    Route::post('/admin/cliente/registro',[ClienteController::class,'store'])->name('homecreg');

});

/*------------------------------------------
--------------------------------------------
All Client Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:2'])->group(function () {

    Route::get('/client/home', [HomeController::class, 'clientHome'])->name('client.home');

    Route::get('/client/reservar', [CitaController::class, 'reservarform'])->name('reservar');
    Route::post('/client/reservar_post', [CitaController::class, 'reservar_post']);
    Route::get('/client/mostrar_reserva', [CitaController::class, 'mostrarreserva']);
});

