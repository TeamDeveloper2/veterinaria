<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/agregar', function () {
    return view('mascota.agregar');
});


Route::get('/prueba', [CitaController::class, 'index'])->name('registrar');
Route::post('/contact_post', [CitaController::class, 'contact_post']);

Route::post('notes', function () {
    return 'Creating a note';
});

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:1'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'showadminHome'])->name('admin.Home');
});
  
/*------------------------------------------
--------------------------------------------
All Client Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:2'])->group(function () {
  
    Route::get('/client/home', [HomeController::class, 'clientHome'])->name('client.home');
});

