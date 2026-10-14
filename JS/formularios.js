const campoSenha = document.querySelector("#senha");
const mostrarSenha = document.querySelector("#mostrarSenha");
if (campoSenha && mostrarSenha) {
    mostrarSenha.addEventListener("click", () => {
        const estaOculta = campoSenha.type === "password";

        campoSenha.type = estaOculta ? "text" : "password";
        mostrarSenha.textContent = estaOculta
        ? "Ocultar senha"
        : "Mostrar senha";
    });
}

const formLogin = document.querySelector("#formLogin");
if (formLogin) {
    formLogin.addEventListener("submit", (event) => {
        event.preventDefault();
        const email = document.querySelector("#email").value.trim();
        const senha = document.querySelector("#senha").value.trim();
        if (email === "" || senha === "") {
            alert("Preencha e-mail e senha.");
            return;
        }
        alert("Login validado!");

        window.location.href = "dashbord.html";
    });
}