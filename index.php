<?php

require_once "includes/config.php";

// Verifica se existe uma sessão de usuário

if (isset($_SESSION["id_usuario"])) {

    // Verifica tipo de usuário

    if ($_SESSION["tipo_usuario"] === "admin") {

        header("Location: dashboard.php");

    } else {

        header("Location: inicio.php");
        
    }

} else {

    // Usuário não autenticado

    header("Location: login.php");

}

exit;
