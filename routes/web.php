<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoServicioController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\PanelController; 
use App\Http\Controllers\ServicioController; 
use App\Http\Controllers\VentaController;


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
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/servicio/exportar', [ServicioController::class, 'exportar'])->name('servicio.exportar'); 

Route::resource('/persona', PersonaController::class); 
Route::resource('/paciente', PacienteController::class);
Route::resource('/doctor', DoctorController::class); 
Route::resource('/proveedor', ProveedorController::class);
Route::resource('/tiposervicio', TipoServicioController::class);
Route::resource('/tipoproducto', TipoProductoController::class);
Route::resource('/panel', PanelController::class);
Route::resource('/servicio', ServicioController::class);
Route::resource('/venta', VentaController::class);