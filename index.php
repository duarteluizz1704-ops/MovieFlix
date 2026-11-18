<?php

/**
 * index.php
 *
 * Página inicial de direcionamento do MovieFlix.
 * Verifica se existe um usuário conectado e identifica seu tipo de conta.
 * Administradores são direcionados para dashboard.php e clientes para inicio.php.
 * Caso não exista uma sessão ativa, o visitante é enviado para login.php.
 */


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
