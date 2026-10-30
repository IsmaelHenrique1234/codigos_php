<?php

// Recuperando uma sessão criada
session_start();

if(isset($_SESSION["usuario"])) {

    //guardar em variaveis dados de sessão
    $usuario = $_SESSION["usuario"];
    $curso = $_SESSION["curso"];
    
    echo "Usuario: {$usuario} <br>";
    echo "Curso: {$curso}";
    
} else{
    echo "nenhuma sessão encontrada";
}


?>