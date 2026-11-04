
<?php
require_once __DIR__ . "/config.php";
?>

<header>

    <div class="logo">

        <img src="assets/IMG/logo.jpg" alt="Logo MovieFlix">

        <div>
            <h2><?php echo $nomeSite; ?></h2>
            <p>Aluguel de filmes</p>
        </div>

    </div>

    <nav>

        <a href="index.php">Início</a>

        <div class="menu-catalogo">

            <a href="produto.php">Catálogo</a>

            <div class="submenu">
                <a href="produto.php#filmes">Filmes</a>
                <a href="produto.php#avaliacoes">Avaliações</a>
            </div>

        </div>

        <a href="sobre.php">Sobre</a>

        <a href="contato.php">Contato</a>

        <a href="login.php">Login</a>

    </nav>

</header>
