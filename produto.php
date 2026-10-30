
<?php
require_once "includes/config.php";

// Busca os filmes disponíveis no banco de dados
$sql = "SELECT
            id_filme,
            titulo,
            sinopse,
            genero,
            ano_lancamento,
            duracao_minutos,
            classificacao_indicativa,
            preco_aluguel,
            disponivel,
            capa
        FROM filmes
        WHERE disponivel = TRUE
        ORDER BY titulo ASC";

$resultado = $conexao->query($sql);

if (!$resultado) {
    die("Não foi possível carregar os filmes.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catálogo - MovieFlix</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

</head>

<body>

    <?php include "includes/menu.php"; ?>

    <main>

        <!-- Título do catálogo -->
        <section class="titulo-catalogo">
            <h2>Catálogo</h2>

            <p>
                Encontre filmes para assistir.
            </p>
        </section>

        <!-- Lista de filmes -->
        <section id="filmes" class="categoria">

            <h2>Filmes disponíveis</h2>

            <div class="produtos">

                <?php if ($resultado->num_rows > 0): ?>

                    <?php while ($filme = $resultado->fetch_assoc()): ?>

                        <?php
                        // Corrige o caminho das capas antigas do banco
                        $capa = $filme["capa"] ?? "";

                        if (strpos($capa, "IMG/") === 0) {
                            $capa = "assets/" . $capa;
                        }
                        ?>

                        <div class="produto">

                            <div class="imagem-produto">

                                <?php if (!empty($capa)): ?>

                                    <img
                                        src="<?php echo htmlspecialchars($capa); ?>"
                                        alt="Capa de <?php echo htmlspecialchars($filme["titulo"]); ?>"
                                    >

                                <?php else: ?>

                                    <div class="sem-capa">
                                        Capa indisponível
                                    </div>

                                <?php endif; ?>

                            </div>

                            <div class="informacoes">

                                <h3>
                                    <?php echo htmlspecialchars($filme["titulo"]); ?>
                                </h3>

                                <p class="genero">
                                    <?php echo htmlspecialchars($filme["genero"]); ?>
                                    |
                                    <?php echo (int) $filme["ano_lancamento"]; ?>
                                </p>

                                <p class="sinopse">
                                    <?php echo htmlspecialchars($filme["sinopse"]); ?>
                                </p>

                                <?php if (!empty($filme["duracao_minutos"])): ?>
                                    <p>
                                        <strong>Duração:</strong>
                                        <?php echo (int) $filme["duracao_minutos"]; ?> min
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($filme["classificacao_indicativa"])): ?>
                                    <p>
                                        <strong>Classificação:</strong>
                                        <?php echo htmlspecialchars($filme["classificacao_indicativa"]); ?>
                                    </p>
                                <?php endif; ?>

                                <p class="preco">
                                    R$
                                    <?php echo number_format(
                                        (float) $filme["preco_aluguel"],
                                        2,
                                        ",",
                                        "."
                                    ); ?>
                                </p>

                                <a class="botao-alugar" href="login.php">
                                    Alugar
                                </a>

                            </div>

                        </div>

                    <?php endwhile; ?>

                <?php else: ?>

                    <p class="sem-filmes">
                        Nenhum filme disponível no momento.
                    </p>

                <?php endif; ?>

            </div>

        </section>

        <!-- Avaliações demonstrativas -->
        <section id="avaliacoes" class="avaliacoes">

            <h2>Avaliações</h2>

            <p>
                Confira algumas avaliações dos nossos filmes.
            </p>

            <div class="lista-avaliacoes">

                <div class="avaliacao">
                    <h3>Jurassic Park</h3>
                    <p class="estrelas">★★★★★</p>
                    <p>Uma aventura emocionante!</p>
                </div>

                <div class="avaliacao">
                    <h3>Homem-Aranha</h3>
                    <p class="estrelas">★★★★☆</p>
                    <p>Uma ótima aventura de ação.</p>
                </div>

                <div class="avaliacao">
                    <h3>Superman</h3>
                    <p class="estrelas">★★★☆☆</p>
                    <p>Uma história de herói e esperança.</p>
                </div>

                <div class="avaliacao">
                    <h3>Interestelar</h3>
                    <p class="estrelas">★★★★☆</p>
                    <p>Uma viagem pelo espaço e pelo tempo.</p>
                </div>

            </div>

        </section>

    </main>

    <?php include "includes/footer.php"; ?>

</body>

</html>
