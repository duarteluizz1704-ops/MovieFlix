
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Dashboard</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- MENU ADMINISTRATIVO -->
    <header class="menu-admin">

        <a href="inicio.php" class="logo-admin">
            <span>MOVIE<span>FLIX</span></span>
            <small>PAINEL ADMINISTRATIVO</small>
        </a>

        <nav class="menu-admin-direita">

            <a href="inicio.php" class="link-inicio">
                Início
            </a>

            <form class="pesquisa-admin" action="dashboard.php" method="GET">
                <input type="search" name="busca"
                    placeholder="Pesquisar...">
                <button type="submit">⌕</button>
            </form>

            <details class="perfil-menu">

                <summary>
                    <span class="perfil-avatar">A</span>
                    <span>Perfil</span>
                    <span class="seta-perfil">⌄</span>
                </summary>

                <div class="submenu-admin">

                    <a href="dashboard.php" class="selecionado">
                        Dashboard
                    </a>

                    <a href="filmes.php">
                        Filmes
                    </a>

                    <a href="alugueis.php">
                        Aluguéis
                    </a>

                    <a href="avaliacoes.php">
                        Avaliações
                    </a>

                    <a href="perfil.php">
                        Meu perfil
                    </a>

                    <hr>

                    <a href="logout.php" class="sair-admin">
                        Sair / Logout
                    </a>

                </div>

            </details>

        </nav>

    </header>


    <main class="dashboard">

        <!-- TÍTULO -->
        <section class="dashboard-topo">

            <div>
                <span class="dashboard-etiqueta">
                    GERENCIAMENTO DO SISTEMA
                </span>

                <h1>Dashboard</h1>

                <p>
                    Acompanhe os dados e o desempenho da MovieFlix.
                </p>
            </div>

            <div class="data-dashboard">
                <span>Painel administrativo</span>
                <strong>Visão geral</strong>
            </div>

        </section>


        <!-- INDICADORES -->
        <section class="indicadores">

            <article class="indicador">

                <div class="indicador-icone">▣</div>

                <p>Filmes disponíveis</p>

                <h2>120</h2>

                <span>Filmes no catálogo</span>

            </article>


            <article class="indicador">

                <div class="indicador-icone">▤</div>

                <p>Aluguéis realizados</p>

                <h2>350</h2>

                <span>Total de pedidos</span>

            </article>


            <article class="indicador">

                <div class="indicador-icone">★</div>

                <p>Avaliações feitas</p>

                <h2>186</h2>

                <span>Opiniões dos clientes</span>

            </article>


            <article class="indicador indicador-faturamento">

                <div class="indicador-icone">R$</div>

                <p>Faturamento</p>

                <h2>R$ 2.480,00</h2>

                <span>Valor acumulado</span>

            </article>

        </section>


        <!-- RANKING DE FILMES -->
        <section class="dashboard-bloco">

            <div class="bloco-topo">

                <div>
                    <span class="dashboard-etiqueta">
                        DESEMPENHO DO CATÁLOGO
                    </span>

                    <h2>Filmes mais alugados</h2>

                    <p>Ranking dos filmes com maior número de aluguéis.</p>
                </div>

            </div>


            <div class="tabela-responsiva">

                <table class="tabela-ranking">

                    <thead>
                        <tr>
                            <th>Posição</th>
                            <th>Filme</th>
                            <th>Total de aluguéis</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td><span class="posicao">01</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">02</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">03</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">04</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">05</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">06</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">07</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">08</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">09</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                        <tr>
                            <td><span class="posicao">10</span></td>
                            <td>XXX</td>
                            <td>XXX</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- CATEGORIAS -->
        <section class="dashboard-bloco">

            <div class="bloco-topo">

                <div>
                    <span class="dashboard-etiqueta">
                        PREFERÊNCIAS DOS CLIENTES
                    </span>

                    <h2>Categorias mais buscadas</h2>

                    <p>
                        Quantidade de filmes cadastrados e aluguéis por gênero.
                    </p>
                </div>

            </div>


            <div class="categorias-dashboard">

                <article class="categoria-indicador">
                    <span>01</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

                <article class="categoria-indicador">
                    <span>02</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

                <article class="categoria-indicador">
                    <span>03</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

                <article class="categoria-indicador">
                    <span>04</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

                <article class="categoria-indicador">
                    <span>05</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

                <article class="categoria-indicador">
                    <span>06</span>
                    <h3>XXX</h3>
                    <p>Filmes no site: <strong>XXX</strong></p>
                    <p>Aluguéis: <strong>XXX</strong></p>
                </article>

            </div>

        </section>


        <!-- TABELA DE PEDIDOS -->
        <section class="dashboard-bloco bloco-pedidos">

            <div class="bloco-topo">

                <div>
                    <span class="dashboard-etiqueta">
                        CONTROLE DE TRANSAÇÕES
                    </span>

                    <h2>Pedidos de aluguéis</h2>

                    <p>
                        Acompanhe os pedidos e suas respectivas situações.
                    </p>
                </div>

            </div>


            <div class="tabela-responsiva">

                <table class="tabela-pedidos">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>Filme</th>
                            <th>Cupom</th>
                            <th>Qtd.</th>
                            <th>Data do aluguel</th>
                            <th>Expiração</th>
                            <th>Valor total</th>
                            <th>Status</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>
                            <td>#001</td>
                            <td>Luiz Arthur</td>
                            <td>Jurassic Park</td>
                            <td>Sim</td>
                            <td>1</td>
                            <td>10/11/2026</td>
                            <td>11/11/2026 22:00</td>
                            <td>R$ 8,90</td>
                            <td><span class="status ativo">Ativo</span></td>
                        </tr>

                        <tr>
                            <td>#002</td>
                            <td>Vitor Miguel</td>
                            <td>Superman</td>
                            <td>Não</td>
                            <td>1</td>
                            <td>09/11/2026</td>
                            <td>10/11/2026 22:00</td>
                            <td>R$ 8,90</td>
                            <td><span class="status expirado">Expirado</span></td>
                        </tr>

                        <tr>
                            <td>#003</td>
                            <td>João Gabriel</td>
                            <td>Interestelar</td>
                            <td>Não</td>
                            <td>2</td>
                            <td>11/11/2026</td>
                            <td>12/11/2026 22:00</td>
                            <td>R$ 21,80</td>
                            <td><span class="status pendente">Pendente</span></td>
                        </tr>

                        <tr>
                            <td>#004</td>
                            <td>Luiz Arthur</td>
                            <td>Batman</td>
                            <td>Sim</td>
                            <td>1</td>
                            <td>08/11/2026</td>
                            <td>09/11/2026 22:00</td>
                            <td>R$ 7,90</td>
                            <td><span class="status expirado">Expirado</span></td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
