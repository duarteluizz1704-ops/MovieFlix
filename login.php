<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Login</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <script src="assets/JS/formularios.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    
    <?php include 'header.php';?>


    <main class="login-area">


        <div class="login">

            <h1>Login</h1>

            <p class="legenda-login">Entre na sua conta.</p>

            
            <form id="formLogin">

                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    placeholder="Digite seu email"
                >

                <label for="senha">Senha</label>

                <div class="campo-senha">

                    <input
                        type="password"
                        id="senha"
                        placeholder="Digite sua senha"
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