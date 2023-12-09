<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NuevoIngresoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\BackupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/generar-copia-seguridad', [BackupController::class, 'generarCopiaSeguridad'])
    ->name('generar.copia.seguridad')
    ->middleware('auth');
    Route::view('/copiaSeguridad', 'nuevo-ingreso.copiaSeguridad')->name('copiaSeguridad');
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('nuevo-ingreso/pdf', [NuevoIngresoController::class, 'pdf'])->name('nuevo-ingreso.pdf');
Route::get('propietario/pdf', [PropietarioController::class, 'pdf'])->name('propietario.pdf');
//Route::get('/propietario/pdf/{id}', [PropietarioController::class, 'pdf'])->name('propietario.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

///Aqui inician las rutas de nuevo ingreso
Route::resource('nuevo-ingreso', NuevoIngresoController::class);

///Aqui inician las rutas de propietarios
Route::resource('propietario', PropietarioController::class);
Route::get('/propietario', [PropietarioController::class, 'index'])->name('propietario.index');

///Aqui inician las rutas de mascotas
Route::resource('mascotas', MascotaController::class);