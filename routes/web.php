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
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\SpaController;

use App\Http\Controllers\InventarioController;
use App\Exports\InventariosExport;
use App\Exports\Inventarios2Export;
use App\Http\Controllers\GraficoVentasController;
use App\Http\Controllers\ReporteCitasController;
use App\Http\Controllers\ReporteClienteController;
use App\Http\Controllers\ReporteInventarioController;
use App\Http\Controllers\ReporteProductoController;
use App\Http\Controllers\ReporteVentaController;
use App\Http\Controllers\TratamientoController;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Bus;
use PhpParser\Builder\Trait_;

use function Symfony\Component\String\b;

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
    Route::get('/admin/cliente0',[ClienteController::class,'index2'])->name('homec1');
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
    Route::get('/admin/citas', [CitaController::class, 'index'])->name('admin_citas');
    Route::get('/admin/citas/mostrar/{codcita}', [CitaController::class, 'MostrarReservaAdministrador'])->name('MostrarReservaAdministrador_cita');
    Route::put('/admin/citas/modificar/{codcita}', [CitaController::class, 'ModificiarReservaAdministrador'])->name('ModificiarReservaAdministrador_cita');
    Route::get('/admin/citas/buscar', [CitaController::class, 'BuscarFechaReservaAdministrador'])->name('BuscarFechaReservaAdministrador_cita');
    Route::get('/admin/reportecitas', [CitaController::class, 'reportecitas'])->name('reporte_citas');
    Route::get('/admin/pdfcitas', [CitaController::class, 'createPDF'])->name('reporte_citas');

    //******************************************************************************************* */
    //******************************EMERGENCIAS ************************************************ */
    route::get('/admin/emergencia',[EmergenciaController::class,'index'])->name('index');
    route::get('/admin/emergencia/create',[EmergenciaController::class,'p'])->name('cuestion');
    route::post('/admin/emergencia/creater',[EmergenciaController::class,'pregunta'])->name('cuestion1');
    route::post('/admin/emergencia/createcm',[EmergenciaController::class,'store0'])->name('storecm');
    route::post('/admin/emergencia/createm',[EmergenciaController::class,'store1'])->name('storem');
    route::post('/admin/emergencia/creat',[EmergenciaController::class,'store2'])->name('store');


    //******************************************************************************************* */
    //***************************REGISTRO_MEDICO************************************************ */
    route::get('/admin/registrom',[RegistromedicoController::class,'index'])->name('indexr');
    route::get('/admin/vregistro/{codmasc}',[RegistromedicoController::class,'show'])->name('ver');
    route::get('/admin/registro/crear',[RegistromedicoController::class,'create'])->name('creaHist');
    route::post('/admin/vregistro/reg',[RegistromedicoController::class,'store'])->name('creaReg');

    //*******************************BITACORA ******************************** */
    //************************************************************************* */
    route::get('/admin/bitacota/',[BitacoraController::class,'index'])->name('indexbitacora');

    //******************************************************************************************* */
    //***************************HEMOGRAMA************************************************ */
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

    //********************************************************
    //********************INVENTARIO**************************
    //********************************************************
    Route::get('admin/registrarArticulo', [InventarioController::class, 'createArticulo'])->name('articuloNew');
    Route::get('admin/articulo', [InventarioController::class, 'index'])->name('indexArt');
    Route::post('admin/registrarArticulo', [InventarioController::class, 'createArticulo'])->name('articuloNewP');
    Route::post('admin/registrarArticulos', [InventarioController::class, 'store'])->name('articuloCrear');
    Route::post('admin/registrarArticuloss', [InventarioController::class, 'store0'])->name('articuloCrear0');
    Route::get('/admin/articulo/modificar/{coditem}', [InventarioController::class, 'edit'])->name('articuloEdit');
    Route::post('/admin/articulo/update/{coditem}', [InventarioController::class,'update']);
    Route::get('admin/articulo/mostrar/{coditem}', [InventarioController::class, 'show'])->name('artShow');
    Route::get('admin/articulo_medicamentos', [InventarioController::class, 'indexM'])->name('indexArtMec');

    //********************************************************
    //********************PROVEEDOR**************************
    //********************************************************
    Route::get('admin/proveedor', [ProveedorController::class, 'index'])->name('proveedor_index');
    Route::get('admin/proveedor_registrar', [ProveedorController::class, 'create'])->name('proveedores_registrar');
    Route::post('admin/proveedor_store', [ProveedorController::class, 'store']);
    Route::get('admin/proveedor_editar/{ci}', [ProveedorController::class, 'edit']);
    Route::put('admin/proveedor_update/{ci}', [ProveedorController::class, 'update']);
    Route::get('admin/proveedor_show/{ci}', [ProveedorController::class, 'show']);

    //********************************************************
    //********************PUNTO DE VENTA**************************
    //********************************************************
    Route::get('admin/ventas', [VentaController::class,'index'])->name('ventas_index');
    Route::get('admin/generarventas', [VentaController::class,'generarVentas'])->name('generar_ventas');
    Route::post('admin/reservarCliente_post', [VentaController::class,'reservarCliente_post']);
    Route::get('admin/reservarCliente', [VentaController::class,'reservarCliente'])->name('reservar_cliente');
    Route::post('admin/reservarVentas', [VentaController::class,'reservarVentas']);
    Route::get('admin/confirmarVenta', [VentaController::class,'confirmarVenta'])->name('confirmar_venta');
    Route::put('admin/confirmarVenta_put', [VentaController::class,'confirmarVenta_put']);
    Route::get('admin/facturaventa/{id_ventacliente}', [VentaController::class,'generarFactura'])->name('factura_venta');
    

    Route::get('admin/devoluciones/{id_venta}', [VentaController::class,'devolucionShow'])->name('devolucion_show');
    Route::post('admin/devoluciones_confrimada', [VentaController::class,'devolucion_post']);

    //***************************************/
    //***********REPORTE************************/
    route::get('admin/reporte1',[InventarioController::class,'reporte1'])->name('reporte1');
    route::get('admin/reporte2',[InventarioController::class,'reporte2'])->name('reporte2');
    route::get('reporte3',[InventarioController::class,'reporte3'])->name('reporte3');
    route::get('reporte4',[InventarioController::class,'reporte4'])->name('reporte4');
    //******************************/
    //****************************///
    route::get('PDF',[InventarioController::class,'pdf'])->name('pdf');
    route::get('excel',function(){
        return Excel::download(new Inventarios2Export,'inventario.xlsx');})->name('excel');

    route::get('articulo',function(){
        return Excel::download(new Inventarios2Export,'articulo.xlsx');})->name('excel2');

    //***************************************/
    //*********** TRATAMIENTO ***************/
    //***************************************/

    route::get('admin/tratamiento',[TratamientoController::class,'index'])->name('indextratamiento');
    route::get('admin/tratamiento/mostrar/{codmascota}',[TratamientoController::class,'show'])->name('mostrar');
    route::get('admin/tratamiento/modificar/{codmascota}',[TratamientoController::class,'edit'])->name('modificar');
    route::pOST('admin/tratamiento/update/{codmascota}',[tratamientoController::class,'update']);
    });

    //***************************************/
    //***********SPA************************/
    route::get('admin/spaindex',[SpaController::class,'index'])->name('spa.index');
    route::get('admin/spacreate',[SpaController::class,'create'])->name('spa.create');
    route::post('admin/spacreate_post',[SpaController::class,'store']);
    Route::get('admin/spa_show/{codspa}', [SpaController::class, 'show'])->name('spa.show');
    Route::get('admin/spa_editar/{codspa}', [SpaController::class, 'edit'])->name('spa.modificar');
    Route::put('admin/spa_update/{codspa}', [SpaController::class, 'update'])->name('spa.update');

    //***************************************/
    //***********CIRUGIA************************/
    route::get('admin/cirugiaindex',[CirugiaController::class,'index'])->name('cirugia.index');
    route::get('admin/cirugiacreate',[CirugiaController::class,'create'])->name('cirugia.create');
    route::post('admin/cirugiacreate_post',[CirugiaController::class,'store'])->name('cirugia.guardar');
    Route::get('admin/cirugia_show/{codcirugia}', [CirugiaController::class, 'show'])->name('cirugia.show');
    Route::get('admin/cirugia_editar/{codcirugia}', [CirugiaController::class, 'edit'])->name('cirugia.modificar');
    Route::put('admin/cirugia_update/{codcirugia}', [CirugiaController::class, 'update'])->name('cirugia.update');

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

/*------------------------------------------
--------------------------------------------
All Medic Veterinarie Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:3'])->group(function () {
    Route::get('/medico/home', [HomeController::class, 'medicoHome'])->name('medico.Home');


});

/*------------------------------------------
--------------------------------------------
Reportes
--------------------------------------------
--------------------------------------------*/


Route::get('/admin/reporte-inventario',[ReporteInventarioController::class,'index'])->name('reporte-inventario');
Route::get('/admin/reporte-inventario/pdf1', [ReporteInventarioController::class, 'pdf1'])->name('reporte-inventario.pdf1');
Route::get('/admin/reporte-inventario/pdf2', [ReporteInventarioController::class, 'pdf2'])->name('reporte-inventario.pdf2');
Route::get('/admin/reporte-inventario/export',[ReporteInventarioController::class, 'export'])->name('reporte-inventario.export');
Route::get('/admin/reporte-inventario/export2',[ReporteInventarioController::class, 'export2'])->name('reporte-inventario.export2');
Route::get('/admin/reporte-inventario/pdf3', [ReporteInventarioController::class, 'pdf3'])->name('reporte-inventario.pdf3');
Route::get('/admin/reporte-inventario/export3',[ReporteInventarioController::class, 'export3'])->name('reporte-inventario.export3');



Route::get('/admin/reporte-venta',[ReporteVentaController::class,'index'])->name('reporte-venta');
Route::get('/admin/reporte-venta/pdf1', [ReporteVentaController::class, 'pdf1'])->name('reporte-venta.pdf1');
Route::get('/admin/reporte-venta/pdf2', [ReporteVentaController::class, 'pdf2'])->name('reporte-venta.pdf2');
Route::get('/admin/reporte-venta/export',[ReporteVentaController::class, 'export'])->name('reporte-venta.export');
Route::get('/admin/reporte-venta/export2',[ReporteVentaController::class, 'export2'])->name('reporte-venta.export2');
Route::get('/admin/reporte-venta/pdf3', [ReporteVentaController::class, 'pdf3'])->name('reporte-venta.pdf3');
Route::get('/admin/reporte-venta/export3',[ReporteVentaController::class, 'export3'])->name('reporte-venta.export3');
Route::get('/admin/reporte-venta/pdf4', [ReporteVentaController::class, 'pdf4'])->name('reporte-venta.pdf4');
Route::get('/admin/reporte-venta/export4',[ReporteVentaController::class, 'export4'])->name('reporte-venta.export4');
Route::get('/admin/reporte-venta/pdf5', [ReporteVentaController::class, 'pdf5'])->name('reporte-venta.pdf5');
Route::get('/admin/reporte-venta/export5',[ReporteVentaController::class, 'export5'])->name('reporte-venta.export5');




Route::get('/admin/reporte-cliente',[ReporteClienteController::class,'index'])->name('reporte-cliente');
Route::get('/admin/reporte-cliente/pdf1', [ReporteClienteController::class, 'pdf1'])->name('reporte-cliente.pdf1');
Route::get('/admin/reporte-cliente/pdf2', [ReporteClienteController::class, 'pdf2'])->name('reporte-cliente.pdf2');
Route::get('/admin/reporte-cliente/pdf3', [ReporteClienteController::class, 'pdf3'])->name('reporte-cliente.pdf3');
Route::get('/admin/reporte-cliente/export',[ReporteClienteController::class, 'export'])->name('reporte-cliente.export');
Route::get('admin/reporte-cliente/export2',[ReporteClienteController::class, 'export2'])->name('reporte-cliente.export2');



Route::get('/admin/reporte-cita',[ReporteCitasController::class,'index'])->name('reporte-cita');
Route::get('/admin/reporte-cita/pdf1', [ReporteCitasController::class, 'pdf1'])->name('reporte-cita.pdf1');
Route::get('/admin/reporte-cita/pdf2', [ReporteCitasController::class, 'pdf2'])->name('reporte-cita.pdf2');
Route::get('/admin/reporte-cita/pdf3', [ReporteCitasController::class, 'pdf3'])->name('reporte-cita.pdf3');
Route::get('/admin/reporte-cita/export',[ReporteCitasController::class, 'export'])->name('reporte-cita.export');
Route::get('/admin/reporte-cita/export2',[ReporteCitasController::class, 'export2'])->name('reporte-cita.export2');
