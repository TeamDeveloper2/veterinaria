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
use App\Http\Controllers\EmergenciaController;
use App\Http\Controllers\HemogramaController;
use App\Http\Controllers\RegistromedicoController;
use App\Models\emergencia;

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
Route::get('/cita', [CitaController::class, 'index'])->name('cita');
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

    //******************************************************************************************* */
    //******************************EMERGENCIAS ************************************************ */
    route::get('/admin/emergencia',[EmergenciaController::class,'index'])->name('index');

    //******************************************************************************************* */
    //***************************REGISTRO_MEDICO************************************************ */
    route::get('/admin/registrom',[RegistromedicoController::class,'index'])->name('indexr');
    route::get('/admin/vregistro/{codmasc}',[RegistromedicoController::class,'show'])->name('ver');

    Route::get('admin/hemograma', [HemogramaController::class, 'index'])->name('hemograma_index');

    Route::get('admin/pmb', [PmbController::class, 'index'])->name('pmb_index');
    Route::get('admin/pmb_registrar', [PmbController::class, 'create'])->name('pmb_registrar');
    Route::post('admin/pmb_store', [PmbController::class, 'store']);
    Route::get('admin/pmb_editar/{codpmb}', [PmbController::class, 'edit']);
    Route::put('admin/pmb_update/{codpmb}', [PmbController::class, 'update']);
    Route::get('admin/pmb_show/{codpmb}', [PmbController::class, 'show']);

    Route::get('admin/csc', [CscController::class, 'index'])->name('csc_index');
    Route::get('admin/csc_registrar', [CscController::class, 'create'])->name('csc_registrar');
    Route::post('admin/csc_store', [CscController::class, 'store']);
    Route::get('admin/csc_editar/{codcsc}', [CscController::class, 'edit']);
    Route::put('admin/csc_update/{codcsc}', [CscController::class, 'update']);
    Route::get('admin/csc_show/{codcsc}', [CscController::class, 'show']);

    Route::get('admin/enfermedadesCardiacas', [EnfermedadescardiacasController::class, 'index'])->name('enfermedadesCardiacas_index');
    Route::get('admin/enfermedadesCardiacas_registrar', [EnfermedadescardiacasController::class, 'create'])->name('enfermedadesCardiacas_registrar');
    Route::post('admin/enfermedadesCardiacas_store', [EnfermedadescardiacasController::class, 'store']);
    Route::get('admin/enfermedadesCardiacas_editar/{codenfercardiacas}', [EnfermedadescardiacasController::class, 'edit']);
    Route::put('admin/enfermedadesCardiacas_update/{codenfercardiacas}', [EnfermedadescardiacasController::class, 'update']);
    Route::get('admin/enfermedadesCardiacas_show/{codenfercardiacas}', [EnfermedadescardiacasController::class, 'show']);
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