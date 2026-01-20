<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index(){
        return view('calculadora');
    }

    // Función para procesar el formulario (POST)
    public function calcular(Request $request)
    {
        // recogemos los datos del formulario
        $num1 = $request->input('numero1');
        $num2 = $request->input('numero2');
        $operador = $request->input('operador');
        $resultado = 0;

        //realizamos la operación lógica
        switch ($operador) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: No se puede dividir por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
        }

        // 3. Retornamos la misma vista, pero enviando la variable 'solucion'
        return view('calculadora', ['solucion' => $resultado]);
    }
}
