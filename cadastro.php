<?php

require_once "includes/config.php";

// Variáveis para armazenar os dados do formulário

$nome = "";
$email = "";
$telefone = "";
$dataNascimento = "";
$erro = "";

// Verifica se o formulário foi enviado

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe os dados do formulário

    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $telefone = trim($_POST["telefone_cliente"] ?? "");
    $dataNascimento = $_POST["data_nascimento"] ?? "";

    $senha = $_POST["senha"] ?? "";
    $confirmarSenha = $_POST["confirmar_senha"] ?? "";

    // Verifica se todos os campos foram preenchidos

    if (
        $nome === "" ||
        $email === "" ||
        $telefone === "" ||
        $dataNascimento === "" ||
        $senha === "" ||
        $confirmarSenha === ""
    ) {

        $erro = "Preencha todos os campos.";

    // Verifica se o e-mail é válido

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $erro = "Digite um e-mail válido.";

    // Verifica se as senhas são iguais

    } elseif ($senha !== $confirmarSenha) {

        $erro = "As senhas não são iguais.";

    // Verifica o tamanho mínimo da senha

    } elseif (strlen($senha) < 8) {

        $erro = "A senha deve ter pelo menos 8 caracteres.";

    } else {

        try {

            // Verifica se o e-mail já está cadastrado

            $sql = "SELECT id_usuario
                    FROM usuario
                    WHERE email = :email
                    LIMIT 1";

            $consulta = $pdo->prepare($sql);

            $consulta->execute([
                ":email" => $email
            ]);

            $usuarioExistente = $consulta->fetch(PDO::FETCH_ASSOC);

            if ($usuarioExistente) {

                $erro = "Este e-mail já está cadastrado.";

            } else {

                // Gera o hash da senha

                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

                // Insere os dados na tabela usuario

                $sql = "INSERT INTO usuario
                        (nome, email, telefone_cliente, data_nascimento, senha)
                        VALUES
                        (:nome, :email, :telefone, :data_nascimento, :senha)";

                $consulta = $pdo->prepare($sql);

                $consulta->execute([
                    ":nome" => $nome,
                    ":email" => $email,
                    ":telefone" => $telefone,
                    ":data_nascimento" => $dataNascimento,
                    ":senha" => $senhaHash
                ]);

                // Cadastro realizado

                header("Location: login.php");
                exit;

            }

        } catch (PDOException $e) {

            $erro = "Não foi possível realizar o cadastro. Tente novamente.";

        }

    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Cadastro</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <script src="assets/JS/script.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    
    <?php include 'header.php';?>


    <main class="cadastro-area">

        <div class="cadastro">

            <h1>Cadastre-se</h1>
            <p class="legenda-cadastro">Crie sua conta no MovieFlix.</p>

            <form id="formCadastro" method="POST" action="cadastro.php">

                <?php if ($erro !== ""): ?>
                    <p class="mensagem-erro">
                        <?= htmlspecialchars($erro) ?>
                    </p>
                
                <?php endif; ?>

                <div class="campo">
                    <label for="nome">Nome</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="nome@exemplo.com"
                        required
                    >
                </div>

                <div class="campos-duplos">

                    <div class="campo">
                        <label for="telefone_cliente">Telefone</label>
                        <input
                            type="tel"
                            id="telefone_cliente"
                            name="telefone_cliente"
                            placeholder="(00) 91111-9999"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input
                            type="date"
                            id="data_nascimento"
                            name="data_nascimento"
                            required
                        >
                    </div>

                </div>

                <div class="campos-duplos">

                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="confirmar_senha">Confirme sua Senha</label>
                        <input
                            type="password"
                            id="confirmar_senha"
                            name="confirmar_senha"
                            placeholder="Confirme sua senha"
                            required
                        >
                    </div>

                </div>

                <button type="submit" class="botao-cadastro">
                    Cadastrar-se
                </button>

            </form>

        </div>
        <script src="assets/JS/script.js"></script>

    </main>

    <?php include 'footer.php';?>