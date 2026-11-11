<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Início</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    

    <?php include 'header.php'; ?>

    <main class="pagina-inicial">

        <!-- BANNER PRINCIPAL -->
        <section class="banner">

            <div class="banner-conteudo">

                <div class="banner-texto">

                    <span class="banner-etiqueta">
                        SUA PRÓXIMA SESSÃO COMEÇA AQUI
                    </span>

                    <h1>
                        Bem-vindo ao
                        <span>MovieFlix!</span>
                    </h1>

                    <p>
                        Descubra grandes histórias, explore diferentes
                        gêneros e encontre seu próximo filme favorito.
                        Tudo isso em um só lugar!
                    </p>

                    <div class="botoes-banner">

                        <a href="produto.php" class="botao-banner">
                            Ver catálogo <span>→</span>
                        </a>

                        <a href="sobre.php" class="botao-banner">
                            Ver sobre <span>→</span>
                        </a>
                        
                    </div>

                </div>

                <div class="banner-cupons">

                    <div class="banner-cupom">
                        <img src="assets/IMG/cupom_herois.jpg"
                            alt="Cupom de desconto para filmes de heróis">
                    </div>

                </div>

            </div>

        </section>

        <!-- FILMES MAIS ALUGADOS -->
        <section class="home-secao">

            <div class="secao-topo">
                <div>
                    <span class="secao-etiqueta">★ OS FAVORITOS DO PÚBLICO</span>
                    <h2>Mais alugados</h2>
                    <p>Confira alguns dos filmes mais procurados.</p>
                </div>

                <a href="produto.php" class="ver-mais">
                    Ver catálogo completo →
                </a>
            </div>


            <div class="home-filmes">

                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/jurassicPark1993.jpg"
                            alt="Pôster de Jurassic Park">
                    </div>

                    <h3>Jurassic Park</h3>
                    <p class="genero-filme">Aventura</p>
                    <p class="preco-filme">R$ 9,90</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/homemAranha2026.jpg"
                            alt="Pôster de Homem-Aranha">
                    </div>

                    <h3>Homem-Aranha</h3>
                    <p class="genero-filme">Ação</p>
                    <p class="preco-filme">R$ 12,90</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/superman2025.jpg"
                            alt="Pôster de Superman">
                    </div>

                    <h3>Superman</h3>
                    <p class="genero-filme">Ação</p>
                    <p class="preco-filme">R$ 8,90</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/interestellar2014.jpg"
                            alt="Pôster de Interestelar">
                    </div>

                    <h3>Interestelar</h3>
                    <p class="genero-filme">Ficção científica</p>
                    <p class="preco-filme">R$ 10,90</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/batman2008.jpg" alt="Pôster de Batman">
                    </div>
                    <h3>Batman: O Cavaleiro das Trevas</h3>
                    <p class="genero-filme">Ação</p>
                    <p class="preco-filme">Consulte no catálogo</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/vingadores2018.jpg" alt="Pôster de Vingadores">
                    </div>
                    <h3>Vingadores: Guerra Infinita</h3>
                    <p class="genero-filme">Ação</p>
                    <p class="preco-filme">Consulte no catálogo</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/avatar2009.jpg" alt="Pôster de Avatar">
                    </div>
                    <h3>Avatar</h3>
                    <p class="genero-filme">Ficção científica</p>
                    <p class="preco-filme">Consulte no catálogo</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


                <article class="home-filme">
                    <div class="poster">
                        <img src="assets/IMG/titanic1997.jpg" alt="Pôster de Titanic">
                    </div>
                    <h3>Titanic</h3>
                    <p class="genero-filme">Romance</p>
                    <p class="preco-filme">Consulte no catálogo</p>
                    <span class="nota-filme">★ --/10</span>
                </article>


            </div>

            <div class="secao-final">
                <a href="produto.php" class="botao-ver-mais">
                    Ver mais filmes
                </a>
            </div>

        </section>


        <!-- FILMES MAIS AVALIADOS -->
        <section class="home-avaliacoes">

            <div class="secao-topo">
                <div>
                    <span class="secao-etiqueta">★ OPINIÃO DOS CLIENTES</span>
                    <h2>Mais avaliados</h2>
                    <p>Veja o que nossa comunidade está dizendo.</p>
                </div>

                <a href="produto.php" class="ver-mais">
                    Ver mais →
                </a>
            </div>


            <div class="avaliacoes-lista">

                <!-- EXEMPLO DE ESTRUTURA PARA AVALIAÇÕES DO BANCO -->
                <article class="avaliacao-card">

                    <div class="avaliacao-topo">
                        <div class="usuario-avatar">U</div>

                        <div>
                            <h3>Avaliações dos usuários</h3>
                            <span>Filmes avaliados pela comunidade</span>
                        </div>
                    </div>

                    <div class="estrelas">★★★★★</div>

                    <p>
                        As avaliações dos filmes aparecerão aqui.
                    </p>

                    <div class="avaliacao-data">
                        Consulte as avaliações no catálogo.
                    </div>

                </article>

            </div>

            <div class="secao-final">
                <a href="produto.php" class="botao-ver-mais">
                    Explorar avaliações
                </a>
            </div>

        </section>


        <!-- CATEGORIAS -->
        <section class="home-categorias">

            <div class="secao-topo">
                <div>
                    <span class="secao-etiqueta">★ EXPLORE O CATÁLOGO</span>
                    <h2>Busque por categorias</h2>
                    <p>Escolha seu gênero favorito e encontre sua próxima história.</p>
                </div>
            </div>


            <div class="categorias-lista">

                <a href="produto.php" class="categoria-card categoria-acao">
                    <span>01</span>
                    <h3>Ação</h3>
                    <p>Adrenalina, Tiro, Porrada e Bomba.</p>
                    <strong>Ver filmes →</strong>
                </a>

                <a href="produto.php" class="categoria-card categoria-ficcao">
                    <span>02</span>
                    <h3>Ficção científica</h3>
                    <p>Explore mundos e possibilidades.</p>
                    <strong>Ver filmes →</strong>
                </a>

                <a href="produto.php" class="categoria-card categoria-comedia">
                    <span>03</span>
                    <h3>Comédia</h3>
                    <p>Histórias para dar boas risadas.</p>
                    <strong>Ver filmes →</strong>
                </a>

                <a href="produto.php" class="categoria-card categoria-terror">
                    <span>04</span>
                    <h3>Terror</h3>
                    <p>Terror e Medo para quem aguenta.</p>
                    <strong>Ver filmes →</strong>
                </a>

            </div>

            <div class="secao-final">
                <a href="produto.php" class="botao-ver-mais">
                    Ver todas as categorias
                </a>
            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

