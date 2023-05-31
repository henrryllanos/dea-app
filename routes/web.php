<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\pagosqrcontroller;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\Controllerscomentarios;
use App\Http\Controllers\Controlleranuncios;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('login');
Route::get('/login', function () {
    return view('login');
})->name('login.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/myindex', [LoginController::class, 'index'])->name('my.index');


Route::get('/recuperar', function () {
    return 'recuperar cuenta';
})->name('recuperar');


Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


Route::get('/registroCliente/{user}', [RegistroController::class, 'edit'])
    ->name('registroCliente');

Route::post('/registroCliente', [RegistroController::class, 'store'])
    ->name('registroCliente.store');

Route::put('/registroCliente/{user}', [RegistroController::class, 'update'])
    ->name('registroCliente.update');
/*
Route::get('/registroCliente', function () {
    return view('registroCliente');
}) -> name('registroCliente');*/

Route::get('/registroAdministrativo', [AdministrativoController::class, 'create'])->name('registroAdministrativo');
Route::post('/registroAdministrativo', [AdministrativoController::class, 'store'])
    ->name('registroAdministrativo.store');


Route::get('/Asignaciondehorario', function () {
    return view('Asignaciondehorario');
})->name('Asignaciondehorario');

Route::get('/listarUsuarios', function () {
    return view('listarUsuario');
})->name('listarUsuario');

Route::delete('/eliminar/{user}', [UserController::class, 'destroy'])
    ->name('user.delete');



Route::get('/solicitudparqueo2', function () {
    return view('solicitudparqueo');
})->name('solicitudparqueo');

Route::get('/registroEntradasalida', function () {
    return view('registroEntradasalida');
})->name('registroEntradasalida');


Route::get('/editarPerfil', function () {
    return view('editar');
})->name('editarPerfil');

Route::put('/editarPerfil/{user}', [UserController::class, 'update'])
    ->name('user.update');


Route::get('/realizarSolicitud', function () {
    return view('realizarSolicitud');
})->name('realizarSolicitud');
Route::post('/realizarSolicitud', [SolicitudController::class, 'store'])
    ->name('realizarSolicitud.store');

Route::get('/asignarRoles', function () {
    return view('roles');
})->name('asignarRoles');

Route::post('/asignarRoles', [RoleController::class, 'store'])
    ->name('asignarRoles.store');

Route::delete('//eliminarRol/{role}', [RoleController::class, 'destroy'])
    ->name('asignarRoles.delete');
Route::get('/asignarRoles/{user}', [RoleController::class, 'edit'])
    ->name('asignarRoles.edit');
Route::put('/asignarRoles/{user}', [RoleController::class, 'update'])
    ->name('asignarRoles.update');

Route::get('/asignarPermiso/{role}', [PermisoController::class, 'edit'])
    ->name('asignarPermiso.edit');
Route::put('/asignarPermiso/{role}', [PermisoController::class, 'update'])
    ->name('asignarPermiso.update');




Route::get('/crearPlazas', function () {
    return view('crearPlazas');
})->name('crearPlazas');




Route::get('/registrarVehiculo/{user}', [VehiculoController::class, 'edit'])
    ->name('registrarVehiculo');

Route::post('/registrarVehiculo/{user}', [VehiculoController::class, 'store'])
    ->name('registrarVehiculo.store');



//generador del pago qr salvar materia :'v
Route::get('/pagoqr', function () {
    return view('/pagoqr');
})->name('pagoqr');
Route::post('/pagoqr', [pagosqrcontroller::class, 'store'])
    ->name('pagoqr.store');

Route::get('/pdf', function () {
        return view('/pdf');
       })->name('pdf');
//
 Route::post('/pdf', [pagosqrcontroller::class, 'pdf'])
    ->name('pagoqr.pdf');


Route::get('/AsignarTarifa', function () {
        return view('/AsignarTarifa');
       })->name('AsignarTarifa');

Route::get('/Comentarios', function () {
        return view('/comentarios');
       })->name('Comentarios');

Route::post('/store', [Controllerscomentarios::class, 'store'])
    ->name('Comentarios.store');
//
Route::get('/Controlpagos', function () {
    return view('/Controlpagos');
   })->name('Controlpagos');
   
//estado de la cuenta:

Route::get('/pagare', function () {
    return view('/pagare');
   })->name('pagare');

Route::get('/anuncios', function () {
    return view('/anuncios');
   })->name('anuncios');
Route::post('/anuncios', [Controlleranuncios::class, 'store'])
    ->name('anuncios.store');
