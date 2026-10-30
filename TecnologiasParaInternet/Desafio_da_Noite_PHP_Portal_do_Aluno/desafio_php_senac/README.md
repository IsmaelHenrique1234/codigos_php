# DESAFIO DA NOITE — PORTAL DO ALUNO (PHP)

**Disciplina:** Tecnologias para Internet | **Modalidade:** individual ou dupla  
**Tempo sugerido:** 75 a 100 minutos | **Nível:** intermediário (conteúdo visto em aula)

## 1. Situação-problema

A equipe de desenvolvimento do Portal do Aluno recebeu um projeto incompleto. Os arquivos estão fora das pastas corretas, alguns nomes não correspondem à finalidade e várias partes do PHP foram removidas. Seu trabalho é **organizar, completar e testar** o sistema.

**Não comece reescrevendo tudo do zero.** Leia os comentários `TODO` de cada arquivo e use os exemplos da aula como referência. Não é permitido utilizar banco de dados ou frameworks neste desafio.

## 2. Comportamento esperado

1. Na página inicial, o usuário acessa o formulário de cadastro.
2. O formulário envia, via `POST`, nome, e-mail e idade para o processamento.
3. O processamento deve validar: nome obrigatório; e-mail válido; idade inteira maior que zero.
4. Se houver erro, o usuário retorna ao formulário com a **mensagem de erro** e os **valores preenchidos** preservados.
5. Se tudo estiver correto, os dados são guardados na **sessão** e a página de resultado mostra nome, e-mail e idade.
6. A mensagem de sucesso aparece somente **uma vez**. Atualizar a página não deve reproduzi-la.
7. O botão **Encerrar sessão** remove o cadastro; a página de resultado passa a informar que não há aluno cadastrado.
8. O cabeçalho e o rodapé são reutilizados por meio de `include`.

## 3. Primeiro desafio: arrumar a estrutura

Todos os arquivos foram entregues dentro de `arquivos_desorganizados/`. **Crie as pastas e renomeie/mova** os arquivos para que o projeto final tenha a seguinte estrutura:

```text
portal_aluno/
├── index.php
├── cadastro.php
├── processar_cadastro.php
├── resultado.php
├── logout.php
└── includes/
    ├── cabecalho.php
    ├── rodape.php
    └── funcoes.php
```

**Pistas para descobrir qual arquivo vai aonde:**

| Arquivo recebido | Papel no sistema | Nome final esperado |
| --- | --- | --- |
| `pagina_inicial.php` | Página de entrada | `index.php` |
| `formulario_aluno.php` | Formulário | `cadastro.php` |
| `acao_cadastrar.php` | Recebe o POST | `processar_cadastro.php` |
| `visualizar_resultado.php` | Exibe dados da sessão | `resultado.php` |
| `encerrar.php` | Finaliza a sessão | `logout.php` |
| `layout_topo.php` | HTML inicial reaproveitado | `includes/cabecalho.php` |
| `layout_base.php` | HTML final reaproveitado | `includes/rodape.php` |
| `utilitarios.php` | Funções reutilizáveis | `includes/funcoes.php` |

**Importante:** depois de mover os arquivos, confira os caminhos dos `include` / `require_once`. Os arquivos principais estão na raiz, e os reutilizáveis ficam em `includes/`.

## 4. Segundo desafio: preencher o código

Os arquivos possuem **26 TODOs**. Siga a ordem dos números, completando trechos relacionados a:

- `session_start`, `$_SESSION`, `isset`, `unset`, `session_unset` e `session_destroy`;
- `$_SERVER["REQUEST_METHOD"]`, `filter_input`, `FILTER_VALIDATE_EMAIL`, `FILTER_VALIDATE_INT`, `trim`;
- `include`, `require_once`, `header("Location: ...")` e `exit`;
- funções e exibição segura com `htmlspecialchars(..., ENT_QUOTES, "UTF-8")`.

**Regra técnica:** `session_start()` e `header()` precisam ser executados antes de qualquer HTML enviado ao navegador. Não coloque `echo` antes de um redirecionamento.

**Dica importante de segurança:** dados digitados pelo usuário devem ser escapados **na exibição**, não quando você os guarda na sessão. Os valores já exibidos no código-base usam `htmlspecialchars()`.

## 5. Terceiro desafio: bateria de testes

Execute os cenários abaixo e registre o resultado em um pequeno relatório (`TESTES.md` ou `.txt`):

| Nº | Ação de teste | Resultado esperado |
| --- | --- | --- |
| 1 | Abrir `index.php` | Título, links e rodapé visíveis |
| 2 | Enviar nome vazio | Exibe erro de nome obrigatório |
| 3 | Enviar e-mail `teste` | Exibe erro de e-mail inválido |
| 4 | Enviar idade `0` | Exibe erro de idade inválida |
| 5 | Enviar `Ana`, `ana@senac.br`, `22` | Exibe o cadastro na página de resultado |
| 6 | Atualizar a página de resultado | Dados continuam, mas mensagem de sucesso some |
| 7 | Clicar em **Encerrar sessão** e depois acessar resultado | Não encontra cadastro na sessão |
| 8 | Enviar `<h1>Ana</h1>` como nome | Mostra o texto literalmente, sem criar um título HTML |
| 9 | Informar dados inválidos após preencher outros campos | Volta ao formulário com valores anteriores preservados |

> Atenção: no teste 8, o nome com marcação HTML é aceito como texto; a **exibição** é que precisa estar protegida.

## 6. Como executar

1. Coloque a pasta `portal_aluno` em `htdocs` do XAMPP (ou outro diretório servido por PHP).
2. Inicie o Apache.
3. Acesse `http://localhost/portal_aluno/index.php`.
4. Confira possíveis erros no navegador e no log do PHP.

Para validar sintaxe individualmente no terminal, você pode executar `php -l nome_do_arquivo.php` (se o PHP estiver disponível no PATH).

## 7. Entrega

Envie um `.zip` com a pasta `portal_aluno/` organizada, todos os arquivos `.php` **sem TODOs pendentes** e o arquivo `TESTES.md` com o resultado de **pelo menos 7 dos 9 testes**.

## 8. Critérios de avaliação (100 pontos)

| Critério | Pontos |
| --- | ---: |
| Organização de pastas, nomes e includes | 20 |
| Recebimento e validação do formulário | 25 |
| Sessões, mensagens temporárias e logout | 30 |
| Navegação e exibição segura | 15 |
| Registro dos testes | 10 |

**Bônus (+10 pontos):** implementar `limparTexto()` em `includes/funcoes.php` e usá-la para tratar o nome antes da validação.

**Perguntas para explicar sua solução:** Por que usar `require_once` em funções? O que mudaria se esquecesse `exit` após `header()`? Qual a diferença entre `unset($_SESSION["mensagem"])` e `session_destroy()`?
