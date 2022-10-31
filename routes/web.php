<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CirugiaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\CscController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\EnfermedadescardiacasController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EcografiaController;

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
    return view('mascota.index');
});

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

    //******************************************************************************************* */
    //******************************ECOGRAFIA******************************************************* */
    Route::get('/admin/ecografia', [EcografiaController::class, 'create'])->name('registrar_ecografia');
    Route::post('/admin/ecografia_post', [EcografiaController::class, 'store']);
    Route::get('/admin/lista_ecografia', [EcografiaController::class, 'index'])->name('lista_ecografia');
    Route::get('/admin/mostrar/{codecografia}', [EcografiaController::class, 'show'])->name('item_ecografia');
    Route::get('/admin/ecografia_edit/{codecografia}', [EcografiaController::class, 'edit']);
    Route::put('/admin/ecografia_update/{codecografia}', [EcografiaController::class, 'update']);

    //******************************************************************************************* */
    //******************************CITAS******************************************************* */
    Route::get('/admin/reportecitas', [CitaController::class, 'reportecitas'])->name('reporte_citas');
    Route::get('/admin/pdfcitas', [CitaController::class, 'createPDF'])->name('reporte_citas');
});

/*------------------------------------------
--------------------------------------------
All Client Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:2'])->group(function () {

    Route::get('/client/home', [HomeController::class, 'clientHome'])->name('client.home');

    Route::get('/client/cita', [CitaController::class, 'reservarform'])->name('reservar');
    Route::post('/client/cita_post', [CitaController::class, 'reservar_post']);
    Route::get('/client/mostrar_cita', [CitaController::class, 'mostrarreserva'])->name('mostrarCita');
    Route::get('/client/modificar_cita',  [CitaController::class, 'modificarReserva']);
    Route::put('/client/actualizar_cita/{codcita}',  [CitaController::class, 'actualizarReserva']);
});

/* Route::get('/csc_create', [CscController::class, 'create'])->name('registrar_csc');
Route::post('/csc_post', [CscController::class, 'store']);
Route::get('/csc_list', [CscController::class, 'index'])->name('list_csc');
Route::get('/csc_edit/{codcsc}', [CscController::class, 'edit']);
Route::put('/csc_update/{codcsc}', [CscController::class, 'update']);

Route::get('/pmb_create', [PmbController::class, 'create'])->name('registrar_pmb');
Route::post('/pmb_store', [PmbController::class, 'store']);
Route::get('/pmb_list', [PmbController::class, 'index'])->name('list_pmb');
Route::get('/pmb_edit/{codpmb}', [PmbController::class, 'edit']);
Route::put('/pmb_update/{codpmb}', [PmbController::class, 'update']);


Route::get('/efercard_create', [EnfermedadescardiacasController::class, 'create'])->name('registrar_enfercardi');
Route::post('/efercard_store', [EnfermedadescardiacasController::class, 'store']);
Route::get('/efercard_list', [EnfermedadescardiacasController::class, 'index'])->name('list_enfercardi');
Route::get('/efercard_edit/{codpmb}', [EnfermedadescardiacasController::class, 'edit']);
Route::put('/efercard_update/{codpmb}', [EnfermedadescardiacasController::class, 'update']);

Route::get('/bitacora',[BitacoraController::class,'index'])->name('ver');;

Route::put('/efercard_update/{codpmb}', [EnfermedadescardiacasController::class, 'update']); */
