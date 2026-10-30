<?php
function Tabuada() {
    $numero = (int) readline("informe um numero: ");
    for($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . $numero * $i . PHP_EOL;
    }
}
Tabuada();