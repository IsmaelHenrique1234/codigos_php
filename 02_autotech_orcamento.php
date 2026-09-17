<?php

// EXERCÍCIO 2 — AUTOTECH
// Sistema de orçamento de serviço automotivo

$codigoOrcamento = rand(1000, 9999);
$dataOrcamento = date("d/m/Y");

$cliente = readline("Informe o nome do cliente: ");
$telefone = readline("Informe o telefone: ");

$modelo = readline("Informe o modelo do veículo: ");
$marca = readline("Informe a marca do veículo: ");
$ano = (int) readline("Informe o ano do veículo: ");
$placa = readline("Informe a placa do veículo: ");
$quilometragem = (int) readline("Informe a quilometragem: ");

$descricaoServico = readline("Informe a descrição do serviço: ");
$valorHora = (float) readline("Informe o valor da hora de mão de obra: R$ ");
$quantidadeHoras = (float) readline("Informe a quantidade de horas de serviço: ");

$peca = readline("Informe o nome da peça: ");
$valorPeca = (float) readline("Informe o valor unitário da peça: R$ ");
$quantidadePecas = (int) readline("Informe a quantidade de peças: ");

$materiaisExtras = (float) readline("Informe o valor dos materiais extras: R$ ");

if (
    $ano <= 0 ||
    $quilometragem < 0 ||
    $valorHora < 0 ||
    $quantidadeHoras <= 0 ||
    $valorPeca < 0 ||
    $quantidadePecas <= 0 ||
    $materiaisExtras < 0
) {

    echo PHP_EOL;
    echo "ERRO: os valores informados são inválidos." . PHP_EOL;

} else {

    $totalMaoDeObra = $valorHora * $quantidadeHoras;

    $totalPecas = $valorPeca * $quantidadePecas;

    $totalOrcamento =
        $totalMaoDeObra +
        $totalPecas +
        $materiaisExtras;

    $valorParcela = $totalOrcamento / 3;

    echo PHP_EOL;
    echo "========================================" . PHP_EOL;
    echo "              AUTOTECH" . PHP_EOL;
    echo "        ORÇAMENTO DE SERVIÇO" . PHP_EOL;
    echo "========================================" . PHP_EOL;

    echo "Código: {$codigoOrcamento}" . PHP_EOL;
    echo "Data: {$dataOrcamento}" . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
    echo "CLIENTE" . PHP_EOL;
    echo "Nome: {$cliente}" . PHP_EOL;
    echo "Telefone: {$telefone}" . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
    echo "VEÍCULO" . PHP_EOL;
    echo "Marca: {$marca}" . PHP_EOL;
    echo "Modelo: {$modelo}" . PHP_EOL;
    echo "Ano: {$ano}" . PHP_EOL;
    echo "Placa: {$placa}" . PHP_EOL;
    echo "Quilometragem: {$quilometragem} km" . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
    echo "SERVIÇO" . PHP_EOL;
    echo "Descrição: {$descricaoServico}" . PHP_EOL;
    echo "Horas trabalhadas: {$quantidadeHoras}" . PHP_EOL;

    echo "Mão de obra: R$ "
        . number_format($totalMaoDeObra, 2, ",", ".")
        . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
    echo "PEÇAS" . PHP_EOL;
    echo "Peça: {$peca}" . PHP_EOL;
    echo "Quantidade: {$quantidadePecas}" . PHP_EOL;

    echo "Total das peças: R$ "
        . number_format($totalPecas, 2, ",", ".")
        . PHP_EOL;

    echo "Materiais extras: R$ "
        . number_format($materiaisExtras, 2, ",", ".")
        . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;

    echo "TOTAL: R$ "
        . number_format($totalOrcamento, 2, ",", ".")
        . PHP_EOL;

    echo "3 parcelas de: R$ "
        . number_format($valorParcela, 2, ",", ".")
        . PHP_EOL;

    echo "========================================" . PHP_EOL;
}