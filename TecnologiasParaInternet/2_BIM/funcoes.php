<?php 

// função responsavel por validar se é um email valido
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// limpa espaços em branco do formulario
function limparTexto($texto) {
    return trim($texto);
}

?>