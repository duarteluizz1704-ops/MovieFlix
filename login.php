<?php

require_once "includes/config.php";

if (isset($_SESSION["id_usuario"])) {

    if ($_SESSION["tipo_usuario"] === "admin") {

        header("Location: dashboard.php");

    } else {

        header("Location: inicio.php");

    }

    exit;
}

$erro = "";

// Verifica se o formulário foi enviado

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $senhaDigitada = $_POST["senha"] ?? "";

    if ($email === "" || $senhaDigitada === "") {

        $erro = "Preencha todos os campos.";

    } else {

        // Procura o usuário pelo e-mail

        $sql = "SELECT id_usuario, nome, email, senha, ativo, tipo_usuario
                FROM usuario
                WHERE email = :email
                LIMIT 1";

        $consulta = $pdo->prepare($sql);

        $consulta->bindValue(":email", $email);

        $consulta->execute();

        $usuarioEncontrado = $consulta->fetch(PDO::FETCH_ASSOC);

        // Verifica se o usuário existe e se a senha está correta

        if (
            $usuarioEncontrado &&
            (int) $usuarioEncontrado["ativo"] === 1 &&
            password_verify($senhaDigitada, $usuarioEncontrado["senha"])
        ) {

            // Cria um novo identificador de sessão

            session_regenerate_id(true);

            // Guarda os dados necessários na sessão

            $_SESSION["id_usuario"] = $usuarioEncontrado["id_usuario"];
            $_SESSION["nome"] = $usuarioEncontrado["nome"];
            $_SESSION["email"] = $usuarioEncontrado["email"];
            $_SESSION["tipo_usuario"] = $usuarioEncontrado["tipo_usuario"];

            // Redireciona usuário pelo tipo de usuário

            if ($_SESSION["tipo_usuario"] === "admin") {

                header("Location: dashboard.php");

            } else {

                header("Location: inicio.php");

            }

            exit;

        } else {

            $erro = "E-mail ou senha incorretos.";

        }
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

    <script src="assets/JS/script.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>

    <header>
        <div class="logo">

            <img src="assets/IMG/logo1.png" alt="">

            <div class="movieflix">

                <h2><span class="movie">Movie</span><span class="flix">Flix</span></h2>

                <p>Alugue.Assista.Avalie</p>

            </div>

        </div>
    </header>


    <main class="login-area">


        <div class="login">

            <h1>Login</h1>

            <p class="legenda-login">Entre na sua conta.</p>

            
            <form id="formLogin" method="POST" action="login.php">

                <?php if ($erro !== ""): ?>
                    <p class="mensagem-erro">
                        <?= htmlspecialchars($erro) ?>
                    </p>
                <?php endif; ?>

                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required 
                    placeholder="Digite seu email"
                >

                <label for="senha">Senha</label>

                <div class="campo-senha">

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        required 
                        placeholder="********"
                    >

                    <button type="button" id="mostrarSenha">
                        <svg viewBox="0 0 24 24" width="22" height="22"
                            fill="none" stroke="#112849"
                            stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">

                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>

                            <circle cx="12" cy="12" r="3"/>

                        </svg>
                    </button>

                </div>

                <button type="submit" class="botao-entrar">
                    Entrar
                </button>

            </form>

            <p class="cadastro-login">
                Ainda não possui uma conta?
                <a href="cadastro.php">Cadastre-se</a>
            </p>


        </div>


    </main>


    <?php include 'footer.php';?>