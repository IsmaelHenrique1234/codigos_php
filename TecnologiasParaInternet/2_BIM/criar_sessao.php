<?php

// INICIAR UMA NOVA SESSÃO OU RECUPERA UMA SESSÃO EXISTENTE
session_start();

// GUARDAR INFORMAÇÃO DENTRO DA SESSÃO
$_SESSION["usuario"] = "Ismael";
$_SESSION["curso"] = "ADS";

echo "informações armazenadas na sessão.";

?>