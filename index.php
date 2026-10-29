
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Início</title>

    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>

    <?php include "includes/menu.php"; ?>

    <main>

        <!-- Banner principal -->
        <section class="banner">
            <h1>Alugue seus filmes favoritos</h1>

            <p>
                Encontre filmes de ação, aventura,
                comédia, terror e muito mais.
            </p>

            <a href="produto.php#filmes" class="botao-banner">
                Ver filmes
            </a>
        </section>

        <!-- Catálogo de filmes -->
        <section class="catalogo" id="filmes">

            <h2>Filmes disponíveis</h2>

            <div class="filmes">

                <!-- Filme 1 -->
                <div class="filme">
                    <img src="IMG/filme1.jpg" alt="Pôster de Jurassic Park">

                    <h3>Jurassic Park</h3>

                    <p>R$ 9,90</p>

                    <a href="produto.php#filmes" class="botao-filme">
                        Alugar
                    </a>
                </div>

                <!-- Filme 2 -->
                <div class="filme">
                    <img src="IMG/filme2.jpg" alt="Pôster de Homem-Aranha">

                    <h3>Homem-Aranha</h3>

                    <p>R$ 12,90</p>

                    <a href="produto.php#filmes" class="botao-filme">
                        Alugar
                    </a>
                </div>

                <!-- Filme 3 -->
                <div class="filme">
                    <img src="IMG/filme3.jpg" alt="Pôster de Superman">

                    <h3>Superman</h3>

                    <p>R$ 8,90</p>

                    <a href="produto.php#filmes" class="botao-filme">
                        Alugar
                    </a>
                </div>

                <!-- Filme 4 -->
                <div class="filme">
                    <img src="IMG/filme4.jpg" alt="Pôster de Interestelar">

                    <h3>Interestelar</h3>

                    <p>R$ 10,90</p>

                    <a href="produto.php#filmes" class="botao-filme">
                        Alugar
                    </a>
                </div>

            </div>
        </section>

    </main>

    <?php include "includes/footer.php"; ?>

</body>
</html>
