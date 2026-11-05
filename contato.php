<?php include 'header.php';?>

    <main class="area-contato">

        <!-- CARD DE INFORMAÇÕES -->
        <section class="info-contato">
            <h1>Entre em contato conosco!</h1>

            <p>
                Nos informe tudo o que poder sobre
                nosso site!
            </p>

            <ul>
                <li>Tire suas Dúvidas</li>
                <li>Elogie o Site</li>
                <li>Faça sua Reclamação</li>
                <li>Nos dê Sugestões</li>
            </ul>
        </section>


        <!-- CARD DO FORMULÁRIO -->
        <section class="contato">

            <h1>Entre em contato</h1>

            <p>
                Envie sua mensagem para nossa equipe.
            </p>

            <form>

                <label>Nome</label>
                <input
                    type="text"
                    placeholder="Digite seu nome"
                >

                <label>Email</label>
                <input
                    type="email"
                    placeholder="Digite seu email"
                >

                <div class="form-grupo">

                    <label for="assunto">Assunto</label>

                    <select id="assunto">
                        <option>Dúvida</option>
                        <option>Elogio</option>
                        <option>Reclamação</option>
                        <option>Sugestão</option>
                    </select>

                </div>

                <label>Mensagem</label>

                <textarea
                    placeholder="Digite sua mensagem"
                ></textarea>

                <button type="submit">
                    Enviar mensagem
                </button>

            </form>

        </section>

    </main>


    <?php include 'footer.php';?>