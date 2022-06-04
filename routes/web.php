<?php

use Illuminate\Support\Facades\Route;

//Controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PatinetesController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\AdministradorController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('proveedor', ProveedorController::class);
    Route::resource('patinetes', PatinetesController::class);
    Route::resource('pagos', PagoController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('alquiler', AlquilerController::class);
    Route::resource('administrador', AdministradorController::class);
});