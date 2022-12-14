<?php

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
    return view('welcome');
});

Auth::routes();

Route::resource('tecnicos', App\Http\Controllers\TecnicoController::class);
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('routers', App\Http\Controllers\RouterController::class);
Route::resource('tipodecontratos', App\Http\Controllers\TipodecontratoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');