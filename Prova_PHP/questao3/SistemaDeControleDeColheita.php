<?php
function cadastros($cadastros, $nomeCultura, $VALID_qtdProdKG, $valEstimadVendaKG, $valorProducao) {
        for($i=0; $i < $cadastros;$i++) {
        echo "nome......................: $nomeCultura[$i]" . PHP_EOL;
        echo "quantidade produzida......: $VALID_qtdProdKG[$i]" . PHP_EOL;
        echo "valor por kg..............: $valEstimadVendaKG[$i]" . PHP_EOL;
        echo "valor estimado da produção: $valorProducao[$i]" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL . PHP_EOL;   
    }
}

function relatorio($id, $data, $responsavel, $valido, $totalProdKG, $totalEstimadVendaKG){
    echo "código da colheita...............: $id" . PHP_EOL;
    echo "data.............................: $data" . PHP_EOL;
    echo "responsavel......................: $responsavel" . PHP_EOL;
    echo "quantidade de culturas válidas...: $valido" . PHP_EOL;
    echo "quantidade total produzida por kg: $totalProdKG" . PHP_EOL;
    echo "valor total estimado da colheita.: $totalEstimadVendaKG" . PHP_EOL;
}

function classificar($classificar) {
    if($totalEstimadVendaKG < 5000) {
        echo "PRODUÇÃO DE PEQUENO PORTE" . PHP_EOL;
    } elseif($totalEstimadVendaKG >= 5000 && $totalEstimadVendaKG < 19999.99) {
        echo "PRODUÇÃO DE MÉDIO PORTE" . PHP_EOL;
    } else{
        echo "PRODUÇÃO DE GRANDE PORTE" . PHP_EOL;
    }
}

function Colheita(){

    $id = rand(1,9999);
    $data = date("d/m/y");
    $responsavel = (string) readline("Nome do responsavel: ");
    
    $cadastros = (int) readline("Quantas cadastros para fazer? ");

    for($i=0; $i < $cadastros; $i++) {
        $nomeCultura[$i] = (string) readline("Nome da cultura: ");
        $qtdProdKG[$i] = (int) readline("quantidade produzida em quilogramas: ");
        $valEstimadVendaKG[$i] = (double) readline("valor estimado de venda por quilograma: ");

        if($qtdProdKG <= 0 || $valEstimadVendaKG <= 0) {
            echo "Registro Invalido" . PHP_EOL;
            continue;
        } 
        $VALID_qtdProdKG[$i] = $qtdProdKG[$i];

        $VALID_valEstimadVendaKG[$i] = $valEstimadVendaKG[$i];

        $valido++;

        $valorProducao[$i] = $VALID_qtdProdKG[$i] * $VALID_valEstimadVendaKG[$i];

        $totalValorProducao += $VALID_valorProducao[$i];

        $totalProdKG += $VALID_qtdProdKG[$i];

        $totalEstimadVendaKG += $valorProducao[$i];

    }

    $cadastros = $valido;
    /*
    for($i=0; $i < $cadastros;$i++) {
        echo "nome......................: $nomeCultura[$i]" . PHP_EOL;
        echo "quantidade produzida......: $VALID_qtdProdKG[$i]" . PHP_EOL;
        echo "valor por kg..............: $valEstimadVendaKG[$i]" . PHP_EOL;
        echo "valor estimado da produção: $valorProducao[$i]" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL . PHP_EOL;   
    }
    */

    
    /*
    echo "código da colheita...............: $id" . PHP_EOL;
    echo "data.............................: $data" . PHP_EOL;
    echo "responsavel......................: $responsavel" . PHP_EOL;
    echo "quantidade de culturas válidas...: $valido" . PHP_EOL;
    echo "quantidade total produzida por kg: $totalProdKG" . PHP_EOL;
    echo "valor total estimado da colheita.: $totalEstimadVendaKG" . PHP_EOL;
    */
    cadastros($cadastros, $nomeCultura, $VALID_qtdProdKG, $valEstimadVendaKG, $valorProducao);
    relatorio($id, $data, $responsavel, $valido, $totalProdKG, $totalEstimadVendaKG);
    classificar($totalEstimadVendaKG);


}
Colheita();