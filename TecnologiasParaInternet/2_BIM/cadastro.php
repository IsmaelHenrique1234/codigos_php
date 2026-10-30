<?php 

// garante que a classe de funções seja chamada apenas uma vez
require_once("funcoes.php");

// emails para testes
$email_valido = "ismael@senac.com";
$email_invalido = "ismaelsenac.com";

if(validarEmail($email_valido)) {
    echo "Email valido";
} else {
    echo "Email invalido";
}

$nome = "      Ismael       ";

echo "<br> Nome sem trim: {$nome} <br>";
$nomeLimpo = limparTexto($nome);
echo "Nome com trim: {$nomeLimpo}";

?>