<?php

// ============================================================
// EXERCÍCIO 3 — MISSÕES DA NOITE — PHP
// Exercícios de condicionais e validações
// ============================================================


// ============================================================
// MISSÃO 01 — CLASSIFICAÇÃO POR IDADE
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       MISSÃO 01 — CLASSIFICAÇÃO" . PHP_EOL;
echo "========================================" . PHP_EOL;

$idade = (int) readline("Informe a idade: ");

if ($idade < 0) {

    echo "ERRO: idade inválida." . PHP_EOL;

} elseif ($idade <= 12) {

    echo "Classificação: Criança." . PHP_EOL;

} elseif ($idade <= 17) {

    echo "Classificação: Adolescente." . PHP_EOL;

} elseif ($idade <= 59) {

    echo "Classificação: Adulto." . PHP_EOL;

} else {

    echo "Classificação: Idoso." . PHP_EOL;
}


// ============================================================
// MISSÃO 02 — SITUAÇÃO ACADÊMICA
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       MISSÃO 02 — SITUAÇÃO ACADÊMICA" . PHP_EOL;
echo "========================================" . PHP_EOL;

$nota1 = (float) readline("Informe a primeira nota: ");
$nota2 = (float) readline("Informe a segunda nota: ");
$frequencia = (float) readline("Informe a frequência (%): ");

if (
    $nota1 < 0 ||
    $nota1 > 10 ||
    $nota2 < 0 ||
    $nota2 > 10 ||
    $frequencia < 0 ||
    $frequencia > 100
) {

    echo "ERRO: informe notas entre 0 e 10 e frequência entre 0% e 100%." . PHP_EOL;

} else {

    $media = ($nota1 + $nota2) / 2;

    echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;

    if ($media >= 7 && $frequencia >= 75) {

        echo "Situação: APROVADO." . PHP_EOL;

    } elseif ($media >= 4 && $frequencia >= 75) {

        echo "Situação: EXAME." . PHP_EOL;

    } else {

        echo "Situação: REPROVADO." . PHP_EOL;
    }
}


// ============================================================
// MISSÃO 03 — ESTACIONAMENTO
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       MISSÃO 03 — ESTACIONAMENTO" . PHP_EOL;
echo "========================================" . PHP_EOL;

$codigoEstacionamento = rand(1000, 9999);
$dataEstacionamento = date("d/m/Y");

$tipoVeiculo = readline("Informe o tipo de veículo [carro/moto/caminhao]: ");
$quantidadeHoras = (float) readline("Informe a quantidade de horas estacionado: ");

if ($quantidadeHoras <= 0) {

    echo "ERRO: a quantidade de horas deve ser maior que zero." . PHP_EOL;

} else {

    $valorHora = 0;

    if ($tipoVeiculo === "carro") {

        $valorHora = 8;

    } elseif ($tipoVeiculo === "moto") {

        $valorHora = 5;

    } elseif ($tipoVeiculo === "caminhao") {

        $valorHora = 12;

    } else {

        echo "ERRO: tipo de veículo inválido." . PHP_EOL;
    }

    if ($valorHora > 0) {

        $totalEstacionamento = $valorHora * $quantidadeHoras;
        $desconto = 0;

        if ($quantidadeHoras > 8) {

            $desconto = $totalEstacionamento * 0.10;
        }

        $totalFinal = $totalEstacionamento - $desconto;

        echo PHP_EOL;
        echo "----------------------------------------" . PHP_EOL;
        echo "Código: {$codigoEstacionamento}" . PHP_EOL;
        echo "Data: {$dataEstacionamento}" . PHP_EOL;
        echo "Tipo de veículo: {$tipoVeiculo}" . PHP_EOL;
        echo "Horas: {$quantidadeHoras}" . PHP_EOL;
        echo "Valor por hora: R$ "
            . number_format($valorHora, 2, ",", ".")
            . PHP_EOL;
        echo "Subtotal: R$ "
            . number_format($totalEstacionamento, 2, ",", ".")
            . PHP_EOL;
        echo "Desconto: R$ "
            . number_format($desconto, 2, ",", ".")
            . PHP_EOL;
        echo "TOTAL: R$ "
            . number_format($totalFinal, 2, ",", ".")
            . PHP_EOL;
        echo "----------------------------------------" . PHP_EOL;
    }
}


// ============================================================
// MISSÃO 04 — EMPRÉSTIMO
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "          MISSÃO 04 — EMPRÉSTIMO" . PHP_EOL;
echo "========================================" . PHP_EOL;

$codigoEmprestimo = rand(1000, 9999);

$salario = (float) readline("Informe o salário: R$ ");
$valorEmprestimo = (float) readline("Informe o valor do empréstimo: R$ ");
$quantidadeParcelas = (int) readline("Informe a quantidade de parcelas: ");

if (
    $salario <= 0 ||
    $valorEmprestimo <= 0 ||
    $quantidadeParcelas <= 0
) {

    echo "ERRO: todos os valores devem ser maiores que zero." . PHP_EOL;

} else {

    $valorParcela = $valorEmprestimo / $quantidadeParcelas;
    $limiteParcela = $salario * 0.30;

    echo "Valor da parcela: R$ "
        . number_format($valorParcela, 2, ",", ".")
        . PHP_EOL;

    echo "Limite de 30% do salário: R$ "
        . number_format($limiteParcela, 2, ",", ".")
        . PHP_EOL;

    if ($valorParcela <= $limiteParcela) {

        echo "Empréstimo APROVADO." . PHP_EOL;
        echo "Código do empréstimo: {$codigoEmprestimo}" . PHP_EOL;

    } else {

        echo "Empréstimo NEGADO." . PHP_EOL;
        echo "A parcela ultrapassa 30% do salário." . PHP_EOL;
    }
}


// ============================================================
// MISSÃO 05 — DELIVERY
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "           MISSÃO 05 — DELIVERY" . PHP_EOL;
echo "========================================" . PHP_EOL;

$valorProduto = (float) readline("Informe o valor do produto: R$ ");
$quantidadeProduto = (int) readline("Informe a quantidade: ");
$formaPagamento = readline("Forma de pagamento [pix/cartao/dinheiro]: ");

if ($valorProduto <= 0 || $quantidadeProduto <= 0) {

    echo "ERRO: valor e quantidade devem ser maiores que zero." . PHP_EOL;

} else {

    $subtotal = $valorProduto * $quantidadeProduto;

    // Cálculo do frete
    if ($subtotal >= 200) {

        $frete = 0;

    } elseif ($subtotal >= 100) {

        $frete = 10;

    } else {

        $frete = 20;
    }

    // Desconto conforme o subtotal
    $percentualDesconto = 0;

    if ($subtotal >= 500) {

        $percentualDesconto = 10;

    } elseif ($subtotal >= 200) {

        $percentualDesconto = 5;
    }

    // PIX recebe mais 2% de desconto
    if ($formaPagamento === "pix") {

        $percentualDesconto = $percentualDesconto + 2;
    }

    $valorDesconto = $subtotal * ($percentualDesconto / 100);

    $totalFinal = $subtotal - $valorDesconto + $frete;

    echo PHP_EOL;
    echo "----------------------------------------" . PHP_EOL;
    echo "Subtotal: R$ "
        . number_format($subtotal, 2, ",", ".")
        . PHP_EOL;

    echo "Desconto: {$percentualDesconto}%" . PHP_EOL;

    echo "Valor do desconto: R$ "
        . number_format($valorDesconto, 2, ",", ".")
        . PHP_EOL;

    echo "Frete: R$ "
        . number_format($frete, 2, ",", ".")
        . PHP_EOL;

    echo "Pagamento: {$formaPagamento}" . PHP_EOL;

    echo "TOTAL: R$ "
        . number_format($totalFinal, 2, ",", ".")
        . PHP_EOL;

    echo "----------------------------------------" . PHP_EOL;
}

?>