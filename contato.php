<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MovieFlix - Contato</title>

    <link rel="stylesheet" href="assets/CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>


<body>
    
    <?php include 'header.php';?>



    <main class="area-contato">

        <div class="contato-card">

            
            <section class="info-contato">

                <div class="info-principal">

                    <h1>Entre em contato conosco!</h1>

                    <p>
                        Sua opinião é muito importante para nós!
                        Queremos tornar o MovieFlix cada vez melhor
                        para todos os amantes do cinema.
                    </p>

                    <h3>Como podemos ajudar?</h3>

                    <ul>
                        <li>Tire suas dúvidas sobre o site.</li>
                        <li>Envie elogios e compartilhe sua experiência.</li>
                        <li>Faça reclamações ou relate problemas.</li>
                        <li>Compartilhe sugestões e ideias.</li>
                    </ul>

                </div>

                
                <div class="dados-contato">

                    <h3>Fale diretamente conosco</h3>

                    <p>
                        <strong>Email:</strong><br>
                        contato@movieflix.com
                    </p>

                    <p>
                        <strong>Telefone:</strong><br>
                        (81) 99999-9999
                    </p>

                </div>

            </section>



            <section class="contato">

                <h1>Envie sua mensagem</h1>

                <p>
                    Preencha os campos abaixo e nossa equipe
                    receberá sua mensagem.
                </p>

                <form>

                    <label for="nome">Nome</label>

                    <input
                        type="text"
                        id="nome"
                        placeholder="Digite seu nome"
                        required
                    >

                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Digite seu email"
                        required
                    >

                    <div class="form-grupo">

                        <label for="assunto">Assunto</label>

                        <select id="assunto" required>
                            <option value="duvida">Dúvida</option>
                            <option value="elogio">Elogio</option>
                            <option value="reclamacao">Reclamação</option>
                            <option value="sugestao">Sugestão</option>
                        </select>

                    </div>

                    <label for="mensagem">Mensagem</label>

                    <textarea
                        id="mensagem"
                        placeholder="Digite sua mensagem..."
                        required
                    ></textarea>

                    <button type="submit">
                        Enviar mensagem
                    </button>

                </form>

            </section>

        </div>

    </main>



    <?php include 'footer.php';?>