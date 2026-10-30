<?php 

// garante que a classe de funções seja chamada apenas uma vez
require_once("funcoes.php");

//cria as variaveis
$email = "";
$mensagem = "";

// verifica se o formulario foi enviado
if($_SERVER["REQUEST_METHOD"] === "POST") {
    // recebe variavel do formulario
    $email = $_POST["email"];

    // remover espaços desnecessarios
    $email = limparTexto($email);

    if(validarEmail($email)) {
        $mensagem = "E-mail valido";
    } else {
        $mensagem = "E-mail invalido";
        header("Location: index.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Simples</title>
</head>
<body>
    <form method="POST">

        <label for="email">
            <br>
            <input 
                type="text"
                id="email"
                name="email"
            >
        </label>

        <br>

        <button type=submit> Validar Email </button>

    </form>
    
    <?php
        // se houver uma mensagem, mostramos ela
        if($mensagem !== "") {
            echo "<h1> {$mensagem} </h1>";
            }
    ?>
    </body>
</html>