<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
//Exportar controladores
use App\Http\Controllers\DocenciaControllers;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MunicipioController;

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
Route::get('RUTAGET',function(){
    return("HOLA RUTAS GET");
}); 


Route::resource('all',DocenciaControllers::class);
Route::resource('municipios',MunicipioController::class);
Route::resource('estados',EstadoController::class);
/* Route::get('irv',DocenciaControllers::class);  */

