@extends('layouts\app')

@section('content')
    

    <h1>Dame 2 números y te los sumo</h1>

    <!-- las líneas que empiezan por @ son directivas blade -->

    <form action="/suma" method="POST">
        @csrf <!-- ver codigo fuente --> 
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" id="numero1"><br>
        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" id="numero2"><br>
        <input type="submit" value="enviar">
    </form>
    @if(isset($resul))
        <h3>Resultado de la suma: {{$resul}}</h3>
    @endif


@endsection