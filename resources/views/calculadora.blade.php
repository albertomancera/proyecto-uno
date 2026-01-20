<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora Laravel</title>
</head>
<body>
    <h1>Calculadora Básica </h1>

    <form action="/calcular" method="POST">
        @csrf
        <label for="numero1">Número 1: </label>
        <input type="number" name="numero1" required>
        <br><br>

        <label for="operador">Operación: </label>
        <select name="operador">
            <option value="+">Suma (+)</option>
            <option value="-">Resta (-)</option>
            <option value="*">Multiplicar (*)</option>
            <option value="/">Dividir (/)</option>
        </select>
        <br><br>

        <label for="numero2">Numero 2: </label>
        <input type="number" name="numero2" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    @if(isset($solucion))
        <hr>
        <h2>El resultado es: {{ $solucion }}</h2>
    @endif
    
</body>
</html>