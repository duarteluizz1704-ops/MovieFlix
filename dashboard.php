<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Dashboard</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <script src="assets/JS/script.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php include 'header.php'; ?>


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

                <h2>XXX</h2>

                <span>Filmes no catálogo</span>

            </article>


            <article class="indicador">

                <div class="indicador-icone">▤</div>

                <p>Aluguéis realizados</p>

                <h2>XXX</h2>

                <span>Total de pedidos</span>

            </article>


            <article class="indicador">

                <div class="indicador-icone">★</div>

                <p>Avaliações feitas</p>

                <h2>XXX</h2>

                <span>Opiniões dos clientes</span>

            </article>


            <article class="indicador indicador-faturamento">

                <div class="indicador-icone">R$</div>

                <p>Faturamento</p>

                <h2>R$ XXX</h2>

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
                            <th>Data do aluguel</th>
                            <th>Expiração</th>
                            <th>Valor total</th>
                            <th>Status</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>
                            <td>#001</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td>XXX</td>
                            <td><span class="status ativo">XXX</span></td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
