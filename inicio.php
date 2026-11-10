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
    
    <?php include 'header.php';?>

    <main>

        <section class="banner">

            <h1>Bem vindo ao</h1>

            <p>
                Encontre filmes de ação, aventura,
                comédia, terror e muito mais.
            </p>

            <button>Ver filmes</button>

        </section>


        <section class="catalogo">

            <h2>Filmes disponíveis</h2>

            <div class="filmes">

                <div class="filme">
                    <img src="assets/IMG/jurassicPark1993.jpg" alt="Filme 1">
                    <h3>Jurassic Park</h3>
                    <p>R$ 9,90</p>
                    <button>Alugar</button>
                </div>

                <div class="filme">
                    <img src="assets/IMG/homemAranha2026.jpg" alt="Filme 2">
                    <h3>Homem Aranha</h3>
                    <p>R$ 12,90</p>
                    <button>Alugar</button>
                </div>

                <div class="filme">
                    <img src="assets/IMG/superman2025.jpg" alt="Filme 3">
                    <h3>Superman</h3>
                    <p>R$ 8,90</p>
                    <button>Alugar</button>
                </div>

                <div class="filme">
                    <img src="assets/IMG/interestellar2014.jpg" alt="Filme 4">
                    <h3>Interestellar</h3>
                    <p>R$ 10,90</p>
                    <button>Alugar</button>
                </div>

            </div>

        </section>

    </main>

<?php include 'footer.php';?>
