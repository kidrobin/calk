<?php

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

// PANTALLA PRINCIPAL
Route::get('/', function () {
    return view('welcome');
});

// *********************************************************
// Registro de Productos
// *********************************************************
Route::get('/nuevaLista', 'MainController@nuevaLista');
Route::post('/guardarLista', 'MainController@guardarLista');
// *************************************************************


// - Muestra Productos Anterires
Route::get('/listas', 'MainController@mostrarListas');
// - Ve Totales de Cuentas Registradas



// REGISTRAR PRODUCTOS
//
// SUMADORA DE PRODUCTOS REGISTRADOS

//Ventana de hot key para registro rapido
