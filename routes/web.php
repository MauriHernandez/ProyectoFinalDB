<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ApoyosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\RecetaController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
route::get ('\welcome', [App\Http\Controllers\HomeController::class, 'index'])->name ('welcome');

Route::resource('perfiles', PerfilesController::class);
Route::resource('medicamentos', MedicamentosController::class);
Route::resource('apoyos', ApoyosController::class);
Route::resource('usuarios', UsuariosController::class);
Route::resource('pacientes', PacientesController::class);
Route::resource('doctores', DoctoresController::class);
Route::resource('citas', CitasController::class);
Route::resource('recetas', RecetaController::class);
Route::get('/backup', '[BackupController@createBackup]');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
