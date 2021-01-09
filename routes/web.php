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
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\RoleController;


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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/servicio/exportar', [ServicioController::class, 'exportar'])->name('servicio.exportar'); 
Route::get('/venta/exportar', [VentaController::class, 'exportar'])->name('venta.exportar'); 

Route::get('/venta/finalizar_venta', [VentaController::class, 'finalizar_venta'])->name('venta.finalizar_venta'); 
Route::get('/venta/reporte_venta', [VentaController::class, 'reporte_venta'])->name('venta.reporte_venta'); 
Route::get('/servicio/grafico', [ServicioController::class, 'grafico'])->name('grafico'); 
Route::get('grafico', [ServicioController::class, 'grafico'])->name('grafico');

Route::get('/venta/{id}/reporte_venta_id', [VentaController::class, 'reporte_venta_id'])->name('venta.reporte_venta_id');  
   
Route::group(['middleware' => 'auth'], function(){
    Route::resource('/persona', PersonaController::class); 
    Route::resource('/paciente', PacienteController::class);
    Route::resource('/doctor', DoctorController::class); 
    Route::resource('/proveedor', ProveedorController::class);
    Route::resource('/tiposervicio', TipoServicioController::class);
    Route::resource('/tipoproducto', TipoProductoController::class);
    Route::resource('/panel', PanelController::class);
    Route::resource('/servicio', ServicioController::class);
    Route::resource('/venta', VentaController::class);
    Route::resource('/producto', ProductoController::class);
    Route::resource('/detalle', DetalleController::class);
    Route::resource('/pago', PagoController::class); 
    });


// Route::resource('/role', RoleController::class); 

// Route::group(['middleware' => ['auth'], 'as' => 'role.'], function(){
//     Route::resource('/role', RoleController::class); 
//     });
Route::group(['middleware' => 'auth'], function(){
    Route::resource('/role', RoleController::class); 
    });