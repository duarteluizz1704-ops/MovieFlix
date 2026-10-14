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