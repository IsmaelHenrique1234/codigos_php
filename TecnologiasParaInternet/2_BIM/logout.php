<?php 

// Classe será responsavel por encerrar uma sessão e limpar as variaveis da sessão

// recupera a sessão criada na outra classe
session_start();

echo "Usuario: {$_SESSION["usuario"]} <br>";
echo "Curso: {$_SESSION["curso"]}";

// Remove todas as variaveis criadas dentro da sessão
session_unset();

// destroi sessao
session_destroy();

echo "<br>sessão encerrada"

?>