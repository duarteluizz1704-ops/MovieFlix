
<?php

require_once "includes/config.php";

$erro = "";
$sucesso = false;

$nome = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $senhaDigitada = $_POST["senha"] ?? "";

    if (
        $nome == "" ||
        $email == "" ||
        $senhaDigitada == ""
    ) {

        $erro = "Preencha todos os campos.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $erro = "Digite um e-mail válido.";

    } elseif (strlen($senhaDigitada) < 8) {

        $erro = "A senha deve ter pelo menos 8 caracteres.";

    } else {

        // Verifica se o e-mail já está cadastrado
        $sql = "SELECT id_usuario
                FROM usuario
                WHERE email = ?
                LIMIT 1";

        $consulta = $conexao->prepare($sql);

        $consulta->bind_param("s", $email);

        $consulta->execute();

        $resultado = $consulta->get_result();

        if ($resultado->num_rows > 0) {

            $erro = "Este e-mail já está cadastrado.";

        } else {

            // Protege a senha antes de salvar
            $senhaHash = password_hash(
                $senhaDigitada,
                PASSWORD_DEFAULT
            );

            // Cadastra o novo usuário
            $sql = "INSERT INTO usuario
                    (nome, email, senha)
                    VALUES (?, ?, ?)";

            $consultaCadastro = $conexao->prepare($sql);

            $consultaCadastro->bind_param(
                "sss",
                $nome,
                $email,
                $senhaHash
            );

            if ($consultaCadastro->execute()) {

                $sucesso = true;

                $nome = "";
                $email = "";

            } else {

                $erro = "Não foi possível realizar o cadastro.";

            }

            $consultaCadastro->close();

        }

        $consulta->close();

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Cadastro</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

</head>

<body>

    <?php include "includes/menu.php"; ?>

    <main class="cadastro-area">

        <div class="cadastro">

            <h1>Cadastre-se</h1>

            <p>Crie sua conta.</p>

            <?php if ($erro != ""): ?>

                <p class="mensagem-erro">
                    <?php echo htmlspecialchars($erro); ?>
                </p>

            <?php endif; ?>

            <?php if ($sucesso): ?>

                <div class="mensagem-sucesso">

                    <p>
                        Cadastro realizado com sucesso!
                    </p>

                    <a href="login.php">
                        Ir para o Login
                    </a>

                </div>

            <?php else: ?>

                <form
                    action="cadastro.php"
                    method="POST"
                >

                    <label for="nome">Usuário</label>

                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome"
                        value="<?php echo htmlspecialchars($nome); ?>"
                        maxlength="100"
                        required
                    >

                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu email"
                        value="<?php echo htmlspecialchars($email); ?>"
                        maxlength="255"
                        required
                    >

                    <label for="senha">Senha</label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Crie uma senha"
                        minlength="8"
                        required
                    >

                    <button type="submit">
                        Cadastrar
                    </button>

                </form>

                <p>
                    Já possui uma conta?

                    <a href="login.php">
                        Faça login
                    </a>
                </p>

            <?php endif; ?>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

</body>

</html>
