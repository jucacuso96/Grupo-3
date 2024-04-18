<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('inicio_sesion', function () {
    return view('Inicio/inicio_sesion');
})->name('inicio_sesion');

Route::get('AclaracionDeSaldo', function () {
    return view('Usuario\aclaracion_saldo');
})->name('Aclara');

Route::get('nueva_solicitud', function () {
    return view('Usuario\nueva_solicitud');
})->name('Aclara');

Route::get('acuerdo_pago', function () {
    return view('Usuario\acuerdo_pago');
})->name('Aclara');

Route::get('consulta_reciente', function () {
    return view('Usuario\consulta_reciente');
})->name('Aclara');

Route::get('escalar_caso', function () {
    return view('Usuario\escalar_caso');
})->name('Aclara');

Route::get('estadisticas_asesor', function () {
    return view('Usuario\estadisticas_asesor');
})->name('Aclara');

Route::get('nueva_solicitud', function () {
    return view('Usuario\nueva_solicitud');
})->name('Aclara');

Route::get('solicitud_productos', function () {
    return view('Usuario\solicitud_productos');
})->name('Aclara');









// Route::get('/grafico', [App\Http\Controllers\HomeController::class, 'GraficoController@index'])->name('GraficoController@index');