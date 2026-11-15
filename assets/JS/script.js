// COMPORTAMENTOS GERAIS DO SITE


// BOTÃO DE MOSTRAR E OCULTAR SENHA

const campoSenha = document.querySelector("#senha");
const mostrarSenha = document.querySelector("#mostrarSenha");

// Só executa se os elementos existirem na página

if (campoSenha && mostrarSenha) {

    mostrarSenha.addEventListener("click", () => {

        const estaOculta = campoSenha.type === "password";

        campoSenha.type = estaOculta ? "text" : "password";

    });

}




// VALIDAÇÃO SIMPLES DO CADASTRO

const formCadastro = document.querySelector("#formCadastro");

if (formCadastro) {

    formCadastro.addEventListener("submit", (event) => {

        const senha = document.querySelector("#senha").value;
        const confirmarSenha = document.querySelector("#confirmar_senha").value;

        if (senha !== confirmarSenha) {

            event.preventDefault();

            alert("As senhas não são iguais!");

            return;
        }

    });

}


// VALIDAÇÃO SIMPLES DO LOGIN

const formLogin = document.querySelector("#formLogin");

if (formLogin) {

    formLogin.addEventListener("submit", (event) => {

        const email = document.querySelector("#email").value.trim();
        const senha = document.querySelector("#senha").value;

        if (email === "" || senha === "") {

            event.preventDefault();

            alert("Preencha o e-mail e a senha.");

        }

    });

}


// FECHAR MENU DE PERFIL AO CLICAR FORA

document.addEventListener("click", function(event) {

    const menusPerfil = document.querySelectorAll(".perfil-menu");

    menusPerfil.forEach(function(menu) {

        // Verifica se o menu está aberto
        if (menu.open) {

            // Verifica se o clique aconteceu fora dele
            if (!menu.contains(event.target)) {

                menu.open = false;

            }

        }

    });

});
