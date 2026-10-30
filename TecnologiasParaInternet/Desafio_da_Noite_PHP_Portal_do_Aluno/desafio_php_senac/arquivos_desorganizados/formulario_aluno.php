<?php
// TODO 04: iniciar a sessão antes de qualquer saída HTML.
$nome = "";
$email = "";
$idade = "";
$mensagem = "";

// TODO 05: recuperar mensagem de erro, se houver, em $_SESSION["erro"].
//         Após recuperar, apagar a mensagem da sessão (unset).
// TODO 06: recuperar valores anteriores de $_SESSION["dados_anteriores"],
//         caso existam, e depois removê-los.

// TODO 07: carregar o cabeçalho a partir da pasta includes.
?>
<h2>Cadastro de aluno</h2>
<?php if ($mensagem !== ""): ?>
    <p><?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?></p>
<?php endif; ?>
<form method="POST" action="processar_cadastro.php">
    <label for="nome">Nome:</label>
    <input id="nome" name="nome" type="text" value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>">
    <br><br>
    <label for="email">E-mail:</label>
    <input id="email" name="email" type="text" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
    <br><br>
    <label for="idade">Idade:</label>
    <input id="idade" name="idade" type="number" value="<?= htmlspecialchars((string) $idade, ENT_QUOTES, 'UTF-8') ?>">
    <br><br>
    <button type="submit">Salvar cadastro</button>
</form>
<p><a href="index.php">Voltar</a></p>
<?php
// TODO 08: carregar o rodapé a partir da pasta includes.
?>
