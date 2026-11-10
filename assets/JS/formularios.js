// BOTÃO DE OCULTAR SENHA

const campoSenha = document.querySelector("#senha");
const mostrarSenha = document.querySelector("#mostrarSenha");

mostrarSenha.addEventListener("click", () => {

    const estaOculta = campoSenha.type === "password";

    campoSenha.type = estaOculta ? "text" : "password";

});


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

        event.preventDefault();

        const email = document.querySelector("#email").value.trim();
        const senha = document.querySelector("#senha").value.trim();

        if (email === "" || senha === "") {

            alert("Preencha o email e a senha.");
            return;

        }

        alert("Login validado!");

        window.location.href = "dashboard.php";

    });

}
