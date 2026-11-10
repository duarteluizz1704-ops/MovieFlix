<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Dashboard</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    
    <?php include 'header.php';?>


    <main class="dashboard">

        <h1>Dashboard</h1>

        <p>Painel administrativo do MovieFlix.</p>


        <section class="indicadores">


            <div class="indicador">

                <p>Filmes</p>

                <h2>120</h2>

            </div>


            <div class="indicador">

                <p>Clientes</p>

                <h2>350</h2>

            </div>


            <div class="indicador">

                <p>Aluguéis</p>

                <h2>85</h2>

            </div>


            <div class="indicador">

                <p>Faturamento</p>

                <h2>R$ 2.480</h2>

            </div>


        </section>


        <section class="tabela">

            <h2>Aluguéis recentes</h2>


            <table>

                <tr>

                    <th>Cliente</th>

                    <th>Obra</th>

                    <th>Valor</th>

                    <th>Status</th>

                </tr>


                <tr>

                    <td>Arthur</td>

                    <td>Jurassic Park</td>

                    <td>R$ 9,90</td>

                    <td>Alugado</td>

                </tr>


                <tr>

                    <td>Vitor</td>

                    <td>Homem Aranha</td>

                    <td>R$ 12,90</td>

                    <td>Alugado</td>

                </tr>


                <tr>

                    <td>João</td>

                    <td>Superman</td>

                    <td>R$ 8,90</td>

                    <td>Pendente</td>

                </tr>

            </table>

        </section>


    </main>


    <?php include 'footer.php';?>