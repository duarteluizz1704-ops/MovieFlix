
<?php
require_once __DIR__ . "/config.php";
?>

<footer>

    <div>

        <h3><?php echo $nomeSite; ?></h3>

        <p><?php echo $slogan; ?></p>

    </div>

    <div>

        <h3>Navegação</h3>

        <a href="index.php">Início</a>

        <a href="produto.php">Filmes</a>

        <a href="sobre.php">Sobre</a>

        <a href="contato.php">Contato</a>

    </div>

    <div>

        <h3>Contato</h3>

        <p><?php echo $emailContato; ?></p>

        <p><?php echo $telefoneContato; ?></p>

    </div>

    <p class="copyright">

        &copy; <?php echo $anoAtual; ?>

        <?php echo $nomeSite; ?> -

        Todos os direitos reservados.

    </p>

</footer>
