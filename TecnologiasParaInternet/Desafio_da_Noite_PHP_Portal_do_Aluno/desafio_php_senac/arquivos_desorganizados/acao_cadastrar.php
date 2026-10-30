<?php
// TODO 09: iniciar ou recuperar a sessão.
// TODO 10: importar UMA VEZ o arquivo com funções, usando require_once.

// TODO 11: permitir o processamento APENAS quando o método for POST.
// Se não for POST, redirecionar para cadastro.php e usar exit.

// TODO 12: receber nome, email e idade com filter_input(INPUT_POST, ...).
// Para o nome, usar trim() e tratar null como string vazia.
// Para o e-mail, usar filtro de validação apropriado.
// Para a idade, usar filtro para inteiro.

// TODO 13: validar os campos, nesta ordem:
// a) nome não pode estar vazio;
// b) e-mail deve ser válido (atenção: false OU null);
// c) idade deve ser um inteiro maior que 0 (atenção: false OU null).
// Guarde o erro em $erro; se não houver, mantenha $erro = "".

// TODO 14: se houver erro, armazená-lo em $_SESSION["erro"].
// Armazenar nome, email e idade digitados em $_SESSION["dados_anteriores"].
// Redirecionar para cadastro.php e interromper a execução com exit.
// DICA: para preservar o e-mail digitado, obtenha o valor bruto de $_POST["email"] ?? "".

// TODO 15: no sucesso, guardar um array em $_SESSION["aluno"] com
// as chaves "nome", "email" e "idade".
// Criar $_SESSION["mensagem"] = "Cadastro realizado com sucesso!".
// Redirecionar para resultado.php e usar exit.
