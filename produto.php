
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Catálogo</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="pagina-produtos">

        <!-- =================================
             PESQUISA E FILTROS
        ================================== -->

        <section class="pesquisa-catalogo">

            <div class="pesquisa-titulo">
                <span>EXPLORE NOSSO CATÁLOGO</span>
                <h1>Encontre seu próximo filme</h1>
                <p>Use os filtros e descubra novas histórias.</p>
            </div>

            <div class="filtros-container">

                <div class="filtro-pesquisa">
                    <label for="nome-filme">Nome do filme</label>
                    <input
                        type="text"
                        id="nome-filme"
                        placeholder="Digite o nome do filme..."
                    >
                </div>

                <div class="filtros-grid">

                    <div class="filtro">
                        <label for="ano">Ano de lançamento</label>
                        <input
                            type="number"
                            id="ano"
                            placeholder="Ex: 2025"
                        >
                    </div>

                    <div class="filtro">
                        <label for="genero">Gênero</label>
                        <select id="genero">
                            <option value="">Todos os gêneros</option>
                            <option>Ação</option>
                            <option>Aventura</option>
                            <option>Ficção científica</option>
                            <option>Comédia</option>
                            <option>Terror</option>
                            <option>Drama</option>
                            <option>Romance</option>
                            <option>Animação</option>
                            <option>Nacional</option>
                        </select>
                    </div>

                    <div class="filtro">
                        <label for="nota">Avaliação mínima</label>
                        <select id="nota">
                            <option value="">Por nota</option>
                            <option>★ 1 estrela</option>
                            <option>★★ 2 estrelas</option>
                            <option>★★★ 3 estrelas</option>
                            <option>★★★★ 4 estrelas</option>
                            <option>★★★★★ 5 estrelas</option>
                        </select>
                    </div>

                    <div class="filtro">
                        <label for="preco">Preço mínimo</label>
                        <input
                            type="number"
                            id="preco"
                            placeholder="R$ 9,00"
                            min="0"
                            step="0.01"
                        >
                    </div>

                    <div class="filtro">
                        <label for="preco-max">Até quanto?</label>
                        <input
                            type="number"
                            id="preco-max"
                            placeholder="Ex: R$ 20,00"
                            min="0"
                            step="0.01"
                        >
                    </div>

                </div>

                <div class="filtros-acoes">

                    <button type="button" class="botao-pesquisar">
                        <span>⌕</span> Pesquisar filmes
                    </button>

                    <button type="reset" class="botao-limpar">
                        Limpar filtros
                    </button>

                </div>

            </div>

        </section>


        <!-- =================================
             RESULTADOS / FILMES RELACIONADOS
        ================================== -->

        <section class="secao-catalogo resultados">

            <div class="catalogo-topo">
                <div>
                    <span class="etiqueta-secao">★ SUA PESQUISA</span>
                    <h2>Filmes relacionados</h2>
                    <p>Os filmes que combinam com sua busca aparecerão aqui.</p>
                </div>
            </div>

            <div class="grade-poster-vazio">

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

                <div class="poster-placeholder">
                    <span>FILME</span>
                </div>

            </div>

        </section>


        <!-- =================================
             RECENTES / BOMBANDO
        ================================== -->

        <section class="secao-catalogo">

            <div class="catalogo-topo">

                <div>
                    <span class="etiqueta-secao">★ NOVIDADES NO CATÁLOGO</span>
                    <h2>Recentes / Bombando <span class="destaque">💥</span></h2>
                    <p>Confira os filmes que estão em destaque.</p>
                </div>

                <a href="#todos-filmes" class="link-ver-mais">
                    Ver mais +
                </a>

            </div>

            <div class="grade-filmes">

                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/caradeBarro2026.jpg"
                             alt="Pôster de Cara de Barro">
                    </div>

                    <div class="dados-filme">
                        <h3>Cara de Barro</h3>
                        <p class="genero-catalogo">Terror / Suspense</p>
                        <p class="ano-catalogo">Lançamento: 2026</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/minhamelhorAmiga2026.jpg"
                             alt="Pôster de Minha Melhor Amiga">
                    </div>

                    <div class="dados-filme">
                        <h3>Minha Melhor Amiga</h3>
                        <p class="genero-catalogo">Drama</p>
                        <p class="ano-catalogo">Lançamento: 2026</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/aindaestouAqui2024.jpg"
                             alt="Pôster de Ainda Estou Aqui">
                    </div>

                    <div class="dados-filme">
                        <h3>Ainda Estou Aqui</h3>
                        <p class="genero-catalogo">Drama / Nacional</p>
                        <p class="ano-catalogo">Lançamento: 2024</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/godzillaminusOne2026.jpg"
                             alt="Pôster de Godzilla Minus One">
                    </div>

                    <div class="dados-filme">
                        <h3>Godzilla Minus One</h3>
                        <p class="genero-catalogo">Ação / Ficção científica</p>
                        <p class="ano-catalogo">Lançamento: 2026</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>

            </div>

        </section>


        <!-- =================================
             FILMES PIPOCA
        ================================== -->

        <section class="secao-catalogo secao-escura">

            <div class="catalogo-topo">

                <div>
                    <span class="etiqueta-secao">★ GRANDES PRODUÇÕES</span>
                    <h2>Filmes Pipoca <span class="destaque">🍿</span></h2>
                    <p>Sucessos de bilheteria que marcaram gerações.</p>
                </div>

                <a href="#todos-filmes" class="link-ver-mais">
                    Ver mais +
                </a>

            </div>


            <div class="grade-filmes">

                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/avatar2009.jpg" alt="Pôster de Avatar">
                    </div>

                    <div class="dados-filme">
                        <h3>Avatar</h3>
                        <p class="genero-catalogo">Ficção científica / Aventura</p>
                        <p class="ano-catalogo">Lançamento: 2009</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/vingadores2018.jpg"
                             alt="Pôster de Vingadores">
                    </div>

                    <div class="dados-filme">
                        <h3>Vingadores: Guerra Infinita</h3>
                        <p class="genero-catalogo">Ação / Heróis</p>
                        <p class="ano-catalogo">Lançamento: 2018</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/titanic1997.jpg" alt="Pôster de Titanic">
                    </div>

                    <div class="dados-filme">
                        <h3>Titanic</h3>
                        <p class="genero-catalogo">Romance / Drama</p>
                        <p class="ano-catalogo">Lançamento: 1997</p>
                        <p class="preco-catalogo">Consulte o catálogo</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>


                <article class="card-catalogo">

                    <div class="poster-catalogo">
                        <img src="assets/IMG/jurassicPark1993.jpg"
                             alt="Pôster de Jurassic Park">
                    </div>

                    <div class="dados-filme">
                        <h3>Jurassic Park</h3>
                        <p class="genero-catalogo">Aventura / Ficção científica</p>
                        <p class="ano-catalogo">Lançamento: 1993</p>
                        <p class="preco-catalogo">R$ 9,90</p>
                        <div class="nota-catalogo">☆☆☆☆☆ <span>--/5</span></div>
                    </div>

                </article>

            </div>

        </section>


        <!-- =================================
             CUPONS
        ================================== -->

        <section class="secao-catalogo secao-cupons">

            <div class="catalogo-topo">

                <div>
                    <span class="etiqueta-secao">★ OFERTAS ESPECIAIS</span>
                    <h2>Cupons MovieFlix</h2>
                    <p>Confira nossas campanhas e descontos especiais.</p>
                </div>

                <a href="#todos-filmes" class="link-ver-mais">
                    Ver mais +
                </a>

            </div>


            <div class="grade-cupons">

                <article class="cupom-card">
                    <img src="assets/IMG/cupom_acao.jpg"
                         alt="Cupom de desconto para filmes de ação">
                </article>

                <article class="cupom-card">
                    <img src="assets/IMG/cupom_classicos.jpg"
                         alt="Cupom de desconto para filmes clássicos">
                </article>

            </div>

        </section>


        <!-- =================================
             CATEGORIAS
        ================================== -->

        <section class="secao-catalogo secao-categorias">

            <div class="catalogo-topo">

                <div>
                    <span class="etiqueta-secao">★ ESCOLHA SEU ESTILO</span>
                    <h2>Filmes por categorias</h2>
                    <p>Explore diferentes universos do cinema.</p>
                </div>

                <a href="#todos-filmes" class="link-ver-mais">
                    Ver mais +
                </a>

            </div>


            <div class="grade-categorias">

                <article class="categoria-catalogo">
                    <div class="poster-placeholder">
                        <span>HERÓIS</span>
                    </div>
                    <h3>Filmes de Heróis</h3>
                    <p>Ação, poderes e grandes aventuras.</p>
                    <a href="#todos-filmes">Explorar categoria →</a>
                </article>


                <article class="categoria-catalogo">
                    <div class="poster-placeholder">
                        <span>CLÁSSICOS</span>
                    </div>
                    <h3>Clássicos</h3>
                    <p>Obras que marcaram a história do cinema.</p>
                    <a href="#todos-filmes">Explorar categoria →</a>
                </article>


                <article class="categoria-catalogo">
                    <div class="poster-placeholder">
                        <span>NACIONAIS</span>
                    </div>
                    <h3>Cinema Nacional</h3>
                    <p>Grandes produções brasileiras.</p>
                    <a href="#todos-filmes">Explorar categoria →</a>
                </article>


                <article class="categoria-catalogo">
                    <div class="poster-placeholder">
                        <span>FICÇÃO</span>
                    </div>
                    <h3>Ficção científica</h3>
                    <p>Novos mundos e possibilidades.</p>
                    <a href="#todos-filmes">Explorar categoria →</a>
                </article>

            </div>

        </section>


        <!-- =================================
             ÚLTIMAS AVALIAÇÕES
        ================================== -->

        <section class="secao-avaliacoes">

            <div class="catalogo-topo">

                <div>
                    <span class="etiqueta-secao">★ OPINIÃO DA COMUNIDADE</span>
                    <h2>Últimas avaliações</h2>
                    <p>Veja o que os espectadores estão comentando.</p>
                </div>

                <a href="#escrever-avaliacao" class="link-ver-mais">
                    Ver mais +
                </a>

            </div>


            <div class="grade-avaliacoes">

                <article class="avaliacao-catalogo">

                    <div class="avaliacao-filme">
                        <div class="mini-poster">
                            <img src="assets/IMG/jurassicPark1993.jpg"
                                 alt="Jurassic Park">
                        </div>

                        <div>
                            <h3>Jurassic Park</h3>
                            <span>Aventura • 1993</span>
                        </div>
                    </div>

                    <div class="avaliacao-conteudo">
                        <div class="avaliacao-estrelas">☆☆☆☆☆</div>
                        <p>Nome do usuário</p>
                        <div class="texto-review">
                            O comentário e a opinião do usuário aparecerão aqui.
                        </div>
                        <span class="data-review">Data da avaliação: --/--/----</span>
                    </div>

                </article>


                <article class="avaliacao-catalogo">

                    <div class="avaliacao-filme">
                        <div class="mini-poster">
                            <img src="assets/IMG/avatar2009.jpg"
                                 alt="Avatar">
                        </div>

                        <div>
                            <h3>Avatar</h3>
                            <span>Ficção científica • 2009</span>
                        </div>
                    </div>

                    <div class="avaliacao-conteudo">
                        <div class="avaliacao-estrelas">☆☆☆☆☆</div>
                        <p>Nome do usuário</p>
                        <div class="texto-review">
                            O comentário e a opinião do usuário aparecerão aqui.
                        </div>
                        <span class="data-review">Data da avaliação: --/--/----</span>
                    </div>

                </article>

            </div>


            <!-- ÁREA PARA ESCREVER AVALIAÇÃO -->

            <div class="escrever-avaliacao" id="escrever-avaliacao">

                <div>
                    <span class="etiqueta-secao">★ SUA OPINIÃO IMPORTA</span>
                    <h2>Compartilhe sua experiência!</h2>
                    <p>Conte para a comunidade o que achou de um filme.</p>
                </div>

                <form>

                    <label for="nome-filme">Nome do filme</label>
                    <input
                        type="text"
                        id="nome-filme"
                        placeholder="Escolha o filme..."
                    >

                    <label for="texto-review">Sua avaliação</label>
                    <textarea
                        id="texto-review"
                        placeholder="Escreva sua opinião sobre o filme..."
                    ></textarea>

                    <label for="nota-review">Sua nota</label>
                    <select id="nota-review">
                        <option>Selecione uma nota</option>
                        <option>★ 1 estrela</option>
                        <option>★★ 2 estrelas</option>
                        <option>★★★ 3 estrelas</option>
                        <option>★★★★ 4 estrelas</option>
                        <option>★★★★★ 5 estrelas</option>
                    </select>

                    <button type="button" class="botao-review">
                        Enviar avaliação
                    </button>

                </form>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
