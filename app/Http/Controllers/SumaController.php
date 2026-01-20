<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{

    // función inicial, lo que se debe mostrar 
    //cuando se entra al formulario por get

    function index(){
        return view('suma', ['resul' => null]);
    }

    function suma(Request $request){ //Recibe un request ocn data
        $numero1 = $request -> input('numero1');    
        $numero2 = $request -> input('numero2');
        $resultado = $numero1 + $numero2;           // calcula resultado para enviar

        return view('suma',['resul' => $resultado]); //invoca view con array asc
    }
}
