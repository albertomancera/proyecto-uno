<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
    return view('inicio');
});

/*
Route::get('/suma', function () {
    return view('suma');
});
*/
// sustituyo el anterior para que invoque a la 
// función index (ver SumaController para esta 
// y la siguiente función)
Route::get('/suma', [SumaController::class, 'index']);
// extraigo la operatoria y paso controlador y método
Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/calculadora', [CalculadoraController::class, 'index']);

Route::post('/calcular', [CalculadoraController::class, 'calcular']);