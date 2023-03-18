<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\ZonaController;
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

Auth::routes();

Route::get('/dash', [HomeController::class, 'index'])->name('dash');

Route::controller(ClienteController::class)->group(function () 
{
    Route::get('cliente', 'index')->name('cliente.index');
    Route::get('cliente/create', 'create')->name('cliente.create');
    Route::get('cliente/edit/{id_cliente}', 'edit')->name('cliente.edit');
    Route::get('cliente/show/{id_cliente}', 'show')->name('cliente.show');
    Route::put('cliente/store', 'store')->name('cliente.store');
    Route::put('cliente/update/{id_cliente}', 'update')->name('cliente.update');
    Route::delete('cliente/destroy/{id_cliente}', 'destroy')->name('cliente.destroy');
});

Route::controller(ContratoController::class)->group(function () {
    Route::get('contrato', 'index')->name('contrato.index');
    Route::get('contrato/create', 'create')->name('contrato.create');
    Route::get('contrato/edit/{id_contrato}', 'edit')->name('contrato.edit');
    Route::get('contrato/show/{id_contrato}', 'show')->name('contrato.show');
    Route::put('contrato/store', 'store')->name('contrato.store');
    Route::put('contrato/update/{id_contrato}', 'update')->name('contrato.update');
    Route::delete('contrato/destroy/{id_contrato}', 'destroy')->name('contrato.destroy');
});

Route::controller(ZonaController::class)->group(function()
{
    Route::get('zona','index')->name('zona.index');
    Route::get('zona/create','create')->name('zona.create');
    Route::get('zona/edit/{id_zona}','edit')->name('zona.edit');
    Route::get('zona/show/{id_zona}','show')->name('zona.show');
    Route::put('zona/store', 'store')->name('zona.store');
    Route::put('zona/update/{id_zona}','update')->name('zona.update'); 
    Route::delete('zona/destroy/{id_zona}','destroy')->name('zona.destroy');

});





// clientes.store
// Route::post('/cliente', [Clie])