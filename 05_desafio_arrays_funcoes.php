<?php

// ============================================================
// EXERCÍCIO 5 — ARRAYS, FOREACH E FUNÇÕES
// ============================================================


// ============================================================
// MISSÃO 01 — FUNCIONÁRIOS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       MISSÃO 01 — FUNCIONÁRIOS" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarFuncionarios()
{
    $funcionarios = array();

    for ($i = 1; $i <= 5; $i++) {

        $nome = readline("Informe o nome do funcionário {$i}: ");

        $funcionarios[] = $nome;
    }

    return $funcionarios;
}

function listarFuncionarios($funcionarios)
{
    echo PHP_EOL;
    echo "Lista de funcionários:" . PHP_EOL;

    foreach ($funcionarios as $funcionario) {

        echo "- {$funcionario}" . PHP_EOL;
    }
}

function contarFuncionarios($funcionarios)
{
    return count($funcionarios);
}

$funcionarios = cadastrarFuncionarios();

listarFuncionarios($funcionarios);

echo "Total de funcionários: "
    . contarFuncionarios($funcionarios)
    . PHP_EOL;


// ============================================================
// MISSÃO 02 — NOTAS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "          MISSÃO 02 — NOTAS" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarNotas()
{
    $notas = array();

    for ($i = 1; $i <= 5; $i++) {

        $nota = (float) readline("Informe a nota {$i}: ");

        $notas[] = $nota;
    }

    return $notas;
}

function listarNotas($notas)
{
    echo PHP_EOL;
    echo "Notas cadastradas:" . PHP_EOL;

    foreach ($notas as $nota) {

        echo number_format($nota, 2, ",", ".") . PHP_EOL;
    }
}

function calcularMediaNotas($notas)
{
    $soma = 0;

    foreach ($notas as $nota) {

        $soma = $soma + $nota;
    }

    return $soma / count($notas);
}

function mostrarSituacaoNotas($media)
{
    if ($media >= 7) {

        echo "Situação: APROVADO." . PHP_EOL;

    } elseif ($media >= 5) {

        echo "Situação: EXAME." . PHP_EOL;

    } else {

        echo "Situação: REPROVADO." . PHP_EOL;
    }
}

$notas = cadastrarNotas();

listarNotas($notas);

$mediaNotas = calcularMediaNotas($notas);

echo "Média: "
    . number_format($mediaNotas, 2, ",", ".")
    . PHP_EOL;

mostrarSituacaoNotas($mediaNotas);


// ============================================================
// MISSÃO 03 — ALUNOS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "          MISSÃO 03 — ALUNOS" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarAlunos()
{
    $alunos = array();

    for ($i = 1; $i <= 4; $i++) {

        echo PHP_EOL;
        echo "Aluno {$i}" . PHP_EOL;

        $nome = readline("Nome: ");
        $idade = (int) readline("Idade: ");
        $nota = (float) readline("Nota: ");

        $aluno = array(
            "nome" => $nome,
            "idade" => $idade,
            "nota" => $nota
        );

        $alunos[] = $aluno;
    }

    return $alunos;
}

function listarAlunos($alunos)
{
    foreach ($alunos as $aluno) {

        echo PHP_EOL;
        echo "Nome: {$aluno["nome"]}" . PHP_EOL;
        echo "Idade: {$aluno["idade"]}" . PHP_EOL;
        echo "Nota: "
            . number_format($aluno["nota"], 2, ",", ".")
            . PHP_EOL;

        if ($aluno["nota"] >= 7) {

            echo "Situação: Aprovado." . PHP_EOL;

        } else {

            echo "Situação: Reprovado." . PHP_EOL;
        }
    }
}

$alunos = cadastrarAlunos();

listarAlunos($alunos);


// ============================================================
// MISSÃO 04 — PRODUTOS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "         MISSÃO 04 — PRODUTOS" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarProdutos()
{
    $produtos = array();

    for ($i = 1; $i <= 5; $i++) {

        echo PHP_EOL;
        echo "Produto {$i}" . PHP_EOL;

        $nome = readline("Nome: ");
        $preco = (float) readline("Preço: R$ ");

        $produto = array(
            "nome" => $nome,
            "preco" => $preco
        );

        $produtos[] = $produto;
    }

    return $produtos;
}

function listarProdutos($produtos)
{
    foreach ($produtos as $produto) {

        echo $produto["nome"]
            . " - R$ "
            . number_format($produto["preco"], 2, ",", ".")
            . PHP_EOL;
    }
}

function calcularTotalProdutos($produtos)
{
    $total = 0;

    foreach ($produtos as $produto) {

        $total = $total + $produto["preco"];
    }

    return $total;
}

function calcularMediaProdutos($produtos)
{
    $total = calcularTotalProdutos($produtos);

    return $total / count($produtos);
}

function listarProdutosCaros($produtos)
{
    echo PHP_EOL;
    echo "Produtos com preço igual ou superior a R$ 100:" . PHP_EOL;

    foreach ($produtos as $produto) {

        if ($produto["preco"] >= 100) {

            echo "- {$produto["nome"]}: R$ "
                . number_format($produto["preco"], 2, ",", ".")
                . PHP_EOL;
        }
    }
}

$produtos = cadastrarProdutos();

listarProdutos($produtos);

$totalProdutos = calcularTotalProdutos($produtos);
$mediaProdutos = calcularMediaProdutos($produtos);

echo PHP_EOL;
echo "Total: R$ "
    . number_format($totalProdutos, 2, ",", ".")
    . PHP_EOL;

echo "Média dos preços: R$ "
    . number_format($mediaProdutos, 2, ",", ".")
    . PHP_EOL;

listarProdutosCaros($produtos);


// ============================================================
// MISSÃO 05 — ESTOQUE
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "          MISSÃO 05 — ESTOQUE" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarProdutosEstoque()
{
    $estoque = array();

    for ($i = 1; $i <= 5; $i++) {

        echo PHP_EOL;
        echo "Produto {$i}" . PHP_EOL;

        $nome = readline("Nome: ");
        $preco = (float) readline("Preço: R$ ");
        $quantidade = (int) readline("Quantidade em estoque: ");

        $produto = array(
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        );

        $estoque[] = $produto;
    }

    return $estoque;
}

function listarEstoque($estoque)
{
    foreach ($estoque as $produto) {

        echo $produto["nome"]
            . " | Preço: R$ "
            . number_format($produto["preco"], 2, ",", ".")
            . " | Quantidade: "
            . $produto["quantidade"]
            . PHP_EOL;
    }
}

function calcularValorProduto($produto)
{
    return $produto["preco"] * $produto["quantidade"];
}

function calcularValorEstoque($estoque)
{
    $total = 0;

    foreach ($estoque as $produto) {

        $total = $total + calcularValorProduto($produto);
    }

    return $total;
}

$estoque = cadastrarProdutosEstoque();

echo PHP_EOL;
listarEstoque($estoque);

$valorEstoque = calcularValorEstoque($estoque);

echo PHP_EOL;
echo "Valor total do estoque: R$ "
    . number_format($valorEstoque, 2, ",", ".")
    . PHP_EOL;


// ============================================================
// MISSÃO 06 — OPERAÇÕES BANCÁRIAS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "     MISSÃO 06 — OPERAÇÕES BANCÁRIAS" . PHP_EOL;
echo "========================================" . PHP_EOL;

$transacoes = array(
    array("tipo" => "deposito", "valor" => 500),
    array("tipo" => "saque", "valor" => 100),
    array("tipo" => "deposito", "valor" => 250),
    array("tipo" => "saque", "valor" => 50)
);

function listarExtrato($transacoes)
{
    foreach ($transacoes as $transacao) {

        echo ucfirst($transacao["tipo"])
            . ": R$ "
            . number_format($transacao["valor"], 2, ",", ".")
            . PHP_EOL;
    }
}

function calcularDepositos($transacoes)
{
    $total = 0;

    foreach ($transacoes as $transacao) {

        if ($transacao["tipo"] === "deposito") {

            $total = $total + $transacao["valor"];
        }
    }

    return $total;
}

function calcularSaques($transacoes)
{
    $total = 0;

    foreach ($transacoes as $transacao) {

        if ($transacao["tipo"] === "saque") {

            $total = $total + $transacao["valor"];
        }
    }

    return $total;
}

function calcularSaldo($transacoes)
{
    $saldo = 0;

    foreach ($transacoes as $transacao) {

        if ($transacao["tipo"] === "deposito") {

            $saldo = $saldo + $transacao["valor"];

        } elseif ($transacao["tipo"] === "saque") {

            $saldo = $saldo - $transacao["valor"];
        }
    }

    return $saldo;
}

listarExtrato($transacoes);

$totalDepositos = calcularDepositos($transacoes);
$totalSaques = calcularSaques($transacoes);
$saldo = calcularSaldo($transacoes);

echo PHP_EOL;
echo "Total de depósitos: R$ "
    . number_format($totalDepositos, 2, ",", ".")
    . PHP_EOL;

echo "Total de saques: R$ "
    . number_format($totalSaques, 2, ",", ".")
    . PHP_EOL;

echo "Saldo: R$ "
    . number_format($saldo, 2, ",", ".")
    . PHP_EOL;


// ============================================================
// MISSÃO 07 — PEDIDO DELIVERY
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       MISSÃO 07 — PEDIDO DELIVERY" . PHP_EOL;
echo "========================================" . PHP_EOL;

$pedido = array(
    array("nome" => "Hambúrguer", "preco" => 25, "quantidade" => 2),
    array("nome" => "Batata frita", "preco" => 15, "quantidade" => 1),
    array("nome" => "Refrigerante", "preco" => 8, "quantidade" => 2)
);

function listarPedido($pedido)
{
    foreach ($pedido as $item) {

        echo $item["nome"]
            . " | "
            . $item["quantidade"]
            . "x | R$ "
            . number_format($item["preco"], 2, ",", ".")
            . PHP_EOL;
    }
}

function calcularSubtotalPedido($pedido)
{
    $subtotal = 0;

    foreach ($pedido as $item) {

        $subtotal = $subtotal
            + ($item["preco"] * $item["quantidade"]);
    }

    return $subtotal;
}

function calcularDescontoPedido($subtotal)
{
    if ($subtotal >= 100) {

        return $subtotal * 0.10;

    } else {

        return 0;
    }
}

function calcularTotalPedido($subtotal, $desconto)
{
    return $subtotal - $desconto;
}

listarPedido($pedido);

$subtotalPedido = calcularSubtotalPedido($pedido);
$descontoPedido = calcularDescontoPedido($subtotalPedido);
$totalPedido = calcularTotalPedido($subtotalPedido, $descontoPedido);

echo PHP_EOL;
echo "Subtotal: R$ "
    . number_format($subtotalPedido, 2, ",", ".")
    . PHP_EOL;

echo "Desconto: R$ "
    . number_format($descontoPedido, 2, ",", ".")
    . PHP_EOL;

echo "Total: R$ "
    . number_format($totalPedido, 2, ",", ".")
    . PHP_EOL;


// ============================================================
// MISSÃO 08 — RELATÓRIO DE ALUNOS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "      MISSÃO 08 — RELATÓRIO DE ALUNOS" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarAlunosRelatorio()
{
    $alunos = array();

    for ($i = 1; $i <= 5; $i++) {

        echo PHP_EOL;
        echo "Aluno {$i}" . PHP_EOL;

        $nome = readline("Nome: ");
        $nota = (float) readline("Nota: ");

        $aluno = array(
            "nome" => $nome,
            "nota" => $nota
        );

        $alunos[] = $aluno;
    }

    return $alunos;
}

function listarAlunosRelatorio($alunos)
{
    foreach ($alunos as $aluno) {

        echo $aluno["nome"]
            . " - Nota: "
            . number_format($aluno["nota"], 2, ",", ".")
            . PHP_EOL;
    }
}

function calcularMediaTurma($alunos)
{
    $soma = 0;

    foreach ($alunos as $aluno) {

        $soma = $soma + $aluno["nota"];
    }

    return $soma / count($alunos);
}

function contarAprovados($alunos)
{
    $aprovados = 0;

    foreach ($alunos as $aluno) {

        if ($aluno["nota"] >= 7) {

            $aprovados++;
        }
    }

    return $aprovados;
}

function contarReprovados($alunos)
{
    $reprovados = 0;

    foreach ($alunos as $aluno) {

        if ($aluno["nota"] < 7) {

            $reprovados++;
        }
    }

    return $reprovados;
}

function mostrarResumoTurma($alunos)
{
    $media = calcularMediaTurma($alunos);
    $aprovados = contarAprovados($alunos);
    $reprovados = contarReprovados($alunos);

    echo PHP_EOL;
    echo "Média da turma: "
        . number_format($media, 2, ",", ".")
        . PHP_EOL;

    echo "Aprovados: {$aprovados}" . PHP_EOL;
    echo "Reprovados: {$reprovados}" . PHP_EOL;
}

$alunosRelatorio = cadastrarAlunosRelatorio();

listarAlunosRelatorio($alunosRelatorio);

mostrarResumoTurma($alunosRelatorio);


// ============================================================
// MISSÃO 09 — RELATÓRIO DE ESTOQUE DA LOJA
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "    MISSÃO 09 — ESTOQUE DA LOJA" . PHP_EOL;
echo "========================================" . PHP_EOL;

function cadastrarProdutosLoja()
{
    $produtos = array();

    for ($i = 1; $i <= 5; $i++) {

        echo PHP_EOL;
        echo "Produto {$i}" . PHP_EOL;

        $nome = readline("Nome: ");
        $preco = (float) readline("Preço: R$ ");
        $quantidade = (int) readline("Quantidade: ");

        $produto = array(
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        );

        $produtos[] = $produto;
    }

    return $produtos;
}

function calcularUnidadesEstoque($produtos)
{
    $total = 0;

    foreach ($produtos as $produto) {

        $total = $total + $produto["quantidade"];
    }

    return $total;
}

function calcularValorEstoqueLoja($produtos)
{
    $total = 0;

    foreach ($produtos as $produto) {

        $total = $total
            + ($produto["preco"] * $produto["quantidade"]);
    }

    return $total;
}

function encontrarProdutoMaisCaro($produtos)
{
    $maisCaro = $produtos[0];

    foreach ($produtos as $produto) {

        if ($produto["preco"] > $maisCaro["preco"]) {

            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

function listarEstoqueBaixo($produtos)
{
    echo PHP_EOL;
    echo "Produtos com estoque baixo:" . PHP_EOL;

    foreach ($produtos as $produto) {

        if ($produto["quantidade"] < 5) {

            echo "- {$produto["nome"]}"
                . " | Quantidade: {$produto["quantidade"]}"
                . PHP_EOL;
        }
    }
}

function listarProdutosAcimaDe100($produtos)
{
    echo PHP_EOL;
    echo "Produtos com preço acima de R$ 100:" . PHP_EOL;

    foreach ($produtos as $produto) {

        if ($produto["preco"] > 100) {

            echo "- {$produto["nome"]}"
                . " | R$ "
                . number_format($produto["preco"], 2, ",", ".")
                . PHP_EOL;
        }
    }
}

function mostrarRelatorioLoja($produtos)
{
    $unidades = calcularUnidadesEstoque($produtos);
    $valor = calcularValorEstoqueLoja($produtos);
    $maisCaro = encontrarProdutoMaisCaro($produtos);

    echo PHP_EOL;
    echo "Total de unidades: {$unidades}" . PHP_EOL;

    echo "Valor total do estoque: R$ "
        . number_format($valor, 2, ",", ".")
        . PHP_EOL;

    echo "Produto mais caro: {$maisCaro["nome"]}" . PHP_EOL;

    echo "Preço: R$ "
        . number_format($maisCaro["preco"], 2, ",", ".")
        . PHP_EOL;
}

$produtosLoja = cadastrarProdutosLoja();

mostrarRelatorioLoja($produtosLoja);

listarEstoqueBaixo($produtosLoja);

listarProdutosAcimaDe100($produtosLoja);


// ============================================================
// MISSÃO 10 — MINI SISTEMA DE VENDAS
// ============================================================

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "      MISSÃO 10 — SISTEMA DE VENDAS" . PHP_EOL;
echo "========================================" . PHP_EOL;

$produtosVenda = array(
    array("id" => 1, "nome" => "Notebook", "preco" => 3500),
    array("id" => 2, "nome" => "Mouse", "preco" => 80),
    array("id" => 3, "nome" => "Teclado", "preco" => 150),
    array("id" => 4, "nome" => "Monitor", "preco" => 900)
);

$vendas = array(
    array("produtoId" => 1, "quantidade" => 1),
    array("produtoId" => 2, "quantidade" => 2),
    array("produtoId" => 4, "quantidade" => 1)
);

function buscarProduto($produtos, $id)
{
    foreach ($produtos as $produto) {

        if ($produto["id"] == $id) {

            return $produto;
        }
    }

    return null;
}

function calcularVenda($produto, $quantidade)
{
    return $produto["preco"] * $quantidade;
}

function listarVendas($produtos, $vendas)
{
    foreach ($vendas as $venda) {

        $produto = buscarProduto(
            $produtos,
            $venda["produtoId"]
        );

        if ($produto != null) {

            $total = calcularVenda(
                $produto,
                $venda["quantidade"]
            );

            echo $produto["nome"]
                . " | Quantidade: "
                . $venda["quantidade"]
                . " | Total: R$ "
                . number_format($total, 2, ",", ".")
                . PHP_EOL;
        }
    }
}

function calcularFaturamento($produtos, $vendas)
{
    $faturamento = 0;

    foreach ($vendas as $venda) {

        $produto = buscarProduto(
            $produtos,
            $venda["produtoId"]
        );

        if ($produto != null) {

            $faturamento = $faturamento
                + calcularVenda(
                    $produto,
                    $venda["quantidade"]
                );
        }
    }

    return $faturamento;
}

function mostrarRelatorioVendas($produtos, $vendas)
{
    echo PHP_EOL;
    echo "Vendas realizadas:" . PHP_EOL;

    listarVendas($produtos, $vendas);

    $faturamento = calcularFaturamento(
        $produtos,
        $vendas
    );

    echo PHP_EOL;
    echo "Faturamento total: R$ "
        . number_format($faturamento, 2, ",", ".")
        . PHP_EOL;
}

mostrarRelatorioVendas($produtosVenda, $vendas);

echo PHP_EOL;
echo "========================================" . PHP_EOL;
echo "       FIM DO EXERCÍCIO 5" . PHP_EOL;
echo "========================================" . PHP_EOL;

?>