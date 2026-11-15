<?php

// Garante que a sessão esteja iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se existe usuário logado
$logado = isset($_SESSION["id_usuario"]);

$nomeUsuario = $_SESSION["nome"] ?? "Visitante";
$tipoUsuario = $_SESSION["tipo_usuario"] ?? "cliente";

// Pega a primeira letra do nome
$inicial = mb_strtoupper(
    mb_substr(trim($nomeUsuario), 0, 1, "UTF-8"),
    "UTF-8"
);

// Identifica a página atual
$paginaAtual = basename($_SERVER["PHP_SELF"]);

?>

<header class="site-header">

    <div class="logo">

        <img src="assets/IMG/logo1.png" alt="MovieFlix">

        <div class="movieflix">

            <h2>
                <span class="movie">Movie</span><span class="flix">Flix</span>
            </h2>

            <p>Alugue.Assista.Avalie</p>

        </div>

    </div>

    <nav class="site-nav">

        <a href="inicio.php"
           class="<?= $paginaAtual === 'inicio.php' ? 'link-ativo' : '' ?>">
            Início
        </a>

        <div class="menu-catalogo">

            <a href="produto.php"
               class="<?= $paginaAtual === 'produto.php' ? 'link-ativo' : '' ?>">
                Catálogo
            </a>

            <div class="submenu">

                <a href="produto.php#filmes">Filmes</a>
                <a href="produto.php#avaliacoes">Avaliações</a>

            </div>

        </div>

        <a href="sobre.php">Sobre</a>

        <a href="contato.php">Contato</a>


        <?php if (!$logado): ?>

            <!-- VISITANTE -->

            <a href="login.php" class="login-nav">
                Login
            </a>

        <?php else: ?>

            <!-- USUÁRIO LOGADO -->

            <details class="perfil-menu">

                <summary>

                    <?php if (!empty($_SESSION["foto_perfil"])): ?>

                        <!-- Mostra a foto do usuário -->
                        <img
                            src="<?= htmlspecialchars($_SESSION["foto_perfil"]) ?>"
                            alt="Foto de perfil"
                            class="perfil-avatar"
                        >

                    <?php else: ?>

                        <!-- Mostra a inicial do nome se não tiver foto -->
                         
                        <span class="perfil-avatar">
                            <?= htmlspecialchars($inicial) ?>
                        </span>

                    <?php endif; ?>

                    <!-- Nome do usuário -->
                    <span class="nome-menu">
                        <?= htmlspecialchars(explode(" ", trim($nomeUsuario))[0]) ?>
                    </span>

                    <!-- Seta do menu -->
                    <span class="seta-perfil">⌄</span>

                </summary>

                <div class="submenu-admin">

                    <div class="perfil-identificacao">

                        <strong>
                            <?= htmlspecialchars($nomeUsuario) ?>
                        </strong>

                        <small>
                            <?= $tipoUsuario === "admin"
                                ? "Administrador"
                                : "Cliente" ?>
                        </small>

                    </div>

                    <?php if ($tipoUsuario === "admin"): ?>

                        <!-- OPÇÕES DO ADMINISTRADOR -->

                        <a href="dashboard.php"
                           class="<?= $paginaAtual === 'dashboard.php' ? 'selecionado' : '' ?>">
                            Dashboard
                        </a>

                        <a href="filmes.php">Gerenciar filmes</a>

                        <a href="alugueis.php">Aluguéis</a>

                        <a href="avaliacoes.php">Avaliações</a>

                    <?php else: ?>

                        <!-- OPÇÕES DO CLIENTE -->

                        <a href="meus_alugueis.php">Meus aluguéis</a>

                        <a href="minhas_avaliacoes.php">Minhas avaliações</a>

                    <?php endif; ?>

                    <a href="perfil.php"
                       class="<?= $paginaAtual === 'perfil.php' ? 'selecionado' : '' ?>">
                        Meu perfil
                    </a>

                    <hr>

                    <a href="logout.php" class="sair-admin">
                        Sair / Logout
                    </a>

                </div>

            </details>

        <?php endif; ?>

    </nav>

</header>
