<?php

session_start();

require_once "includes/config.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"] ?? "");
    $senhaDigitada = $_POST["senha"] ?? "";

    if ($email == "" || $senhaDigitada == "") {

        $erro = "Preencha todos os campos.";

    } else {

        $sql = "SELECT id_usuario, nome, email, senha
                FROM usuario
                WHERE email = ?
                LIMIT 1";

        $consulta = $conexao->prepare($sql);

        $consulta->bind_param("s", $email);

        $consulta->execute();

        $resultado = $consulta->get_result();

        if ($resultado->num_rows == 1) {

            $usuario = $resultado->fetch_assoc();

            if (password_verify(
                $senhaDigitada,
                $usuario["senha"]
            )) {

                session_regenerate_id(true);

                $_SESSION["id_usuario"] =
                    $usuario["id_usuario"];

                $_SESSION["nome_usuario"] =
                    $usuario["nome"];

                $_SESSION["email_usuario"] =
                    $usuario["email"];

                header("Location: index.php");
                exit;

            } else {

                $erro = "E-mail ou senha incorretos.";

            }

        } else {

            $erro = "E-mail ou senha incorretos.";

        }

        $consulta->close();

    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Login</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <script src="assets/JS/formularios.js" defer></script>

</head>


<body>

    <?php include "includes/menu.php"; ?>

    <main class="login-area">

        <div class="login">

            <h1>Login</h1>

            <p>Entre na sua conta.</p>

            <?php if ($erro != ""): ?>

                <p class="mensagem-erro">
                    <?php echo htmlspecialchars($erro); ?>
                </p>

            <?php endif; ?>

            <form
                class="form-area"
                id="formLogin"
                action="login.php"
                method="POST"
            >

                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Digite seu email"
                    value="<?php
                        echo htmlspecialchars(
                            $_POST["email"] ?? ""
                        );
                    ?>"
                    required
                >

                <label for="senha">Senha</label>

                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >

                <button
                    type="button"
                    id="mostrarSenha"
                >
                    Mostrar
                </button>

                <button type="submit">
                    Entrar
                </button>

            </form>

            <p>
                Ainda não possui uma conta?

                <a href="cadastro.php">
                    Cadastre-se
                </a>
            </p>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

</body>

</html>
