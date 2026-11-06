<?php include 'headerlogin.php';?>

    <main class="login-area">


        <div class="login">

            <h1>Login</h1>

            <p>Entre na sua conta.</p>

            <form id="formLogin">

                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Digite seu email"
                >

                <label for="senha">Senha</label>
                <input
                    type="password"
                    id="senha"
                    placeholder="Digite sua senha"
                >

                <button type="button" id="mostrarSenha">
                    Mostrar senha
                </button>

                <button type="submit">
                    Entrar
                </button>

            </form>


            <p>
                Ainda não possui uma conta?
                <a href="cadastro.php">Cadastre-se</a>
            </p>

        </div>


    </main>


    <?php include 'footer.php';?>