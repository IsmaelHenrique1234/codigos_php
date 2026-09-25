<?php
function adicao($a, $b){
    return $a + $b;
}
function substracao($a, $b){
    return $a - $b;
}
function multiplicacao($a, $b){
    return $a * $b;
}
function divisao($a, $b){
    return $a / $b;
}
function Calculadora() {
    $primeiro = (int) readline("primeiro numero: ");
    $segundo = (int) readline("segundo numero: ");
    $operacao = (string) readline("operação: ");

    switch($operacao){
        case "+": {
            $resultado = adicao($primeiro, $segundo);
            echo "$primeiro + $segundo = $resultado";
            break;
        }
        case "-": {
            $resultado = substracao($primeiro, $segundo);
            echo "$primeiro - $segundo = $resultado";
            break;
        }
        case "*": {
            $resultado = multiplicacao($primeiro, $segundo);
            echo "$primeiro * $segundo = $resultado";
            break;
        }
        case "/": {
            if($b === 0){
                echo "não pode dividir com 0";
            } else {
                $resultado = divisao($primeiro, $segundo);
                echo "$primeiro / $segundo = $resultado";
            }
            break;
        }
        default: {
            echo "operação invalida";
        }
    }

}
Calculadora();