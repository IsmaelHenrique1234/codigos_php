<?php

// EXERCÍCIO 1 — SENAC TOUR
// Orçamento de viagem

$codigoOrcamento = rand(1000, 9999);
$dataOrcamento = date("d/m/Y");

$cliente = readline("Informe o nome do cliente: ");
$origem = readline("Informe a cidade de origem: ");
$destino = readline("Informe a cidade de destino: ");
$quantidadeViajantes = (int) readline("Informe a quantidade de viajantes: ");
$quantidadeDias = (int) readline("Informe a quantidade de dias: ");

$valorPassagem = (float) readline("Informe o valor da passagem por viajante: R$ ");
$valorHospedagem = (float) readline("Informe o valor da hospedagem por dia: R$ ");
$valorAlimentacao = (float) readline("Informe o valor da alimentação por dia e por viajante: R$ ");
$valorTransporte = (float) readline("Informe o valor do transporte por viajante: R$ ");
$valorPasseio = (float) readline("Informe o valor do passeio por viajante: R$ ");

if (
    $quantidadeViajantes <= 0 ||
    $quantidadeDias <= 0 ||
    $valorPassagem < 0 ||
    $valorHospedagem < 0 ||
    $valorAlimentacao < 0 ||
    $valorTransporte < 0 ||
    $valorPasseio < 0
) {

    echo PHP_EOL;
    echo "ERRO: os valores informados devem ser válidos." . PHP_EOL;

} else {

    $totalPassagens = $valorPassagem * $quantidadeViajantes;

    $totalHospedagem = $valorHospedagem * $quantidadeDias;

    $totalAlimentacao = $valorAlimentacao
        * $quantidadeDias
        * $quantidadeViajantes;

    $totalTransporte = $valorTransporte * $quantidadeViajantes;

    $totalPasseios = $valorPasseio * $quantidadeViajantes;

    $totalViagem =
        $totalPassagens +
        $totalHospedagem +
        $totalAlimentacao +
        $totalTransporte +
        $totalPasseios;

    $valorPorViajante = $totalViagem / $quantidadeViajantes;

    echo PHP_EOL;
    echo "========================================" . PHP_EOL;
    echo "             SENAC TOUR" . PHP_EOL;
    echo "          ORÇAMENTO DE VIAGEM" . PHP_EOL;
    echo "========================================" . PHP_EOL;

    echo "Código: {$codigoOrcamento}" . PHP_EOL;
    echo "Data: {$dataOrcamento}" . PHP_EOL;
    echo "Cliente: {$cliente}" . PHP_EOL;
    echo "Origem: {$origem}" . PHP_EOL;
    echo "Destino: {$destino}" . PHP_EOL;
    echo "Viajantes: {$quantidadeViajantes}" . PHP_EOL;
    echo "Dias de viagem: {$quantidadeDias}" . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
    echo "Passagens: R$ "
        . number_format($totalPassagens, 2, ",", ".")
        . PHP_EOL;

    echo "Hospedagem: R$ "
        . number_format($totalHospedagem, 2, ",", ".")
        . PHP_EOL;

    echo "Alimentação: R$ "
        . number_format($totalAlimentacao, 2, ",", ".")
        . PHP_EOL;

    echo "Transporte: R$ "
        . number_format($totalTransporte, 2, ",", ".")
        . PHP_EOL;

    echo "Passeios: R$ "
        . number_format($totalPasseios, 2, ",", ".")
        . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;

    echo "TOTAL DA VIAGEM: R$ "
        . number_format($totalViagem, 2, ",", ".")
        . PHP_EOL;

    echo "VALOR POR VIAJANTE: R$ "
        . number_format($valorPorViajante, 2, ",", ".")
        . PHP_EOL;

    echo "========================================" . PHP_EOL;
}