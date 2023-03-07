<?php

use App\Http\Controllers\idiomaControler;
use App\Http\Controllers\SistemaController;
use illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('seleccionar',[IdiomaController::class, 'seleccionar'])->name("seleccionar");
Route::post('procesar',[idiomaControler::class, 'procesar'])->name('procesar');
Route::get('saludar',[idiomaControler::class, 'saludar'])->name('saludar');
Route::get('despedir',[idiomaControler::class, 'despedir'])->name('despedir');

Route::get('login',[SistemaController::class,'entrada']);
Route::post('validar',[SistemaController::class,'validar'])->name('validar');
Route::get('ropciones',[SistemaController::class,'mopciones'])->name('nopciones');
