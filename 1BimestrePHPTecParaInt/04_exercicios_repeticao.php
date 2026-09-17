<?php

// ============================================================
// EXERCÍCIO 4 — ESTRUTURAS DE REPETIÇÃO
// ============================================================


// ============================================================
// EXERCÍCIO 01 — CONTAGEM DE 1 ATÉ N
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo " EXERCÍCIO 01 — CONTAGEM DE 1 ATÉ N" . PHP_EOL;
echo "========================================" . PHP_EOL;

$n = (int) readline("Informe um número inteiro positivo: ");

if ($n <= 0) {

    echo "ERRO: informe um número maior que zero." . PHP_EOL;

} else {

    $contador = 1;

    while ($contador <= $n) {

        echo $contador . PHP_EOL;

        $contador++;
    }
}


// ============================================================
// EXERCÍCIO 02 — TABUADA
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       EXERCÍCIO 02 — TABUADA" . PHP_EOL;
echo "========================================" . PHP_EOL;

$numero = (int) readline("Informe um número para a tabuada: ");

echo PHP_EOL;
echo "Tabuada do {$numero}:" . PHP_EOL;

for ($contador = 1; $contador <= 10; $contador++) {

    $resultado = $numero * $contador;

    echo "{$numero} x {$contador} = {$resultado}" . PHP_EOL;
}


// ============================================================
// EXERCÍCIO 03 — SOMA DE 1 ATÉ N
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "     EXERCÍCIO 03 — SOMA DE 1 ATÉ N" . PHP_EOL;
echo "========================================" . PHP_EOL;

$n = (int) readline("Informe um número inteiro positivo: ");

if ($n <= 0) {

    echo "ERRO: informe um número maior que zero." . PHP_EOL;

} else {

    $soma = 0;

    for ($contador = 1; $contador <= $n; $contador++) {

        $soma = $soma + $contador;
    }

    echo "A soma de 1 até {$n} é: {$soma}" . PHP_EOL;
}


// ============================================================
// EXERCÍCIO 04 — MÉDIA DOS VALORES
// Digite 0 para encerrar
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "     EXERCÍCIO 04 — MÉDIA DOS VALORES" . PHP_EOL;
echo "========================================" . PHP_EOL;

$soma = 0;
$contador = 0;

$valor = (float) readline("Informe um valor (0 para encerrar): ");

while ($valor != 0) {

    if ($valor > 0) {

        $soma = $soma + $valor;
        $contador++;

    } else {

        echo "Informe um valor positivo ou 0 para encerrar." . PHP_EOL;
    }

    $valor = (float) readline("Informe um valor (0 para encerrar): ");
}

if ($contador > 0) {

    $media = $soma / $contador;

    echo PHP_EOL;
    echo "Quantidade de valores: {$contador}" . PHP_EOL;
    echo "Soma dos valores: R$ "
        . number_format($soma, 2, ",", ".")
        . PHP_EOL;
    echo "Média: R$ "
        . number_format($media, 2, ",", ".")
        . PHP_EOL;

} else {

    echo "Nenhum valor válido foi informado." . PHP_EOL;
}


// ============================================================
// EXERCÍCIO 05 — ANÁLISE DA TURMA
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       EXERCÍCIO 05 — ANÁLISE DA TURMA" . PHP_EOL;
echo "========================================" . PHP_EOL;

$quantidadeAlunos = (int) readline("Informe a quantidade de alunos: ");

if ($quantidadeAlunos <= 0) {

    echo "ERRO: a quantidade deve ser maior que zero." . PHP_EOL;

} else {

    $somaNotas = 0;
    $maiorNota = 0;
    $menorNota = 10;
    $aprovados = 0;
    $reprovados = 0;

    for ($contador = 1; $contador <= $quantidadeAlunos; $contador++) {

        echo PHP_EOL;
        echo "Aluno {$contador}" . PHP_EOL;

        $nome = readline("Nome: ");
        $nota = (float) readline("Nota: ");

        if ($nota < 0 || $nota > 10) {

            echo "ERRO: a nota deve estar entre 0 e 10." . PHP_EOL;

        } else {

            $somaNotas = $somaNotas + $nota;

            if ($nota > $maiorNota) {

                $maiorNota = $nota;
            }

            if ($nota < $menorNota) {

                $menorNota = $nota;
            }

            if ($nota >= 7) {

                $aprovados++;

            } else {

                $reprovados++;
            }

            echo "Aluno: {$nome}" . PHP_EOL;
            echo "Nota: "
                . number_format($nota, 2, ",", ".")
                . PHP_EOL;
        }
    }

    $mediaTurma = $somaNotas / $quantidadeAlunos;

    echo PHP_EOL;
    echo "========================================" . PHP_EOL;
    echo "          RESULTADO DA TURMA" . PHP_EOL;
    echo "========================================" . PHP_EOL;

    echo "Quantidade de alunos: {$quantidadeAlunos}" . PHP_EOL;

    echo "Média da turma: "
        . number_format($mediaTurma, 2, ",", ".")
        . PHP_EOL;

    echo "Maior nota: "
        . number_format($maiorNota, 2, ",", ".")
        . PHP_EOL;

    echo "Menor nota: "
        . number_format($menorNota, 2, ",", ".")
        . PHP_EOL;

    echo "Aprovados: {$aprovados}" . PHP_EOL;
    echo "Reprovados: {$reprovados}" . PHP_EOL;

    echo "========================================" . PHP_EOL;
}

?>