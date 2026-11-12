<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Cadastro</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    
    <?php include 'header.php';?>


    <main class="cadastro-area">

        <div class="cadastro">

            <h1>Cadastre-se</h1>
            <p class="legenda-cadastro">Crie sua conta no MovieFlix.</p>

            <form id="formCadastro" method="POST">

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