<?php

$alunos = [
    [
        "nome" => "Ismael",
        "idade" => 19,
        "curso" => "ADS",
        "nota" => 8

    ],
    [
        "nome" => "David",
        "idade" => 24,
        "curso" => "ADS",
        "nota" => 6

    ]
];

foreach ($alunos as $aluno){

    echo "Nome:" . $aluno["nome"].PHP_EOL;
    echo "Idade:" . $aluno["idade"].PHP_EOL;
    echo "Curso:" . $aluno["curso"].PHP_EOL;
    echo "Nota:" . $aluno["nota"].PHP_EOL;

    if($aluno["nota"] >=7) {
        echo "APROVADO" . PHP_EOL;
    }
    else{
        echo "REPROVADO" . PHP_EOL;
    }
}