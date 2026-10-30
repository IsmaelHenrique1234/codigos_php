<?php
// TODO 16: iniciar a sessão antes de exibir HTML.
// TODO 17: recuperar $aluno de $_SESSION["aluno"] ?? null.
// TODO 18: recuperar a mensagem de $_SESSION["mensagem"] ?? "".
// Apagar SOMENTE a mensagem após recuperá-la (flash message).
// TODO 19: importar o cabeçalho.
?>
<h2>Resultado do cadastro</h2>
<?php if ($mensagem !== ""): ?>
    <p><?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?></p>
<?php endif; ?>
<?php if ($aluno !== null): ?>
    <p>Nome: <?= htmlspecialchars($aluno["nome"], ENT_QUOTES, "UTF-8") ?></p>
    <p>E-mail: <?= htmlspecialchars($aluno["email"], ENT_QUOTES, "UTF-8") ?></p>
    <p>Idade: <?= (int) $aluno["idade"] ?></p>
<?php else: ?>
    <p>Nenhum aluno cadastrado nesta sessão.</p>
<?php endif; ?>
<p><a href="cadastro.php">Novo cadastro</a> | <a href="logout.php">Encerrar sessão</a></p>
<?php
// TODO 20: importar o rodapé.
?>
