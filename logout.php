<?php

/**
 * logout.php
 *
 * Responsável por encerrar a sessão do usuário.
 * Limpa os dados armazenados, destrói a sessão atual
 * e redireciona o usuário para login.php.
 */

require_once "includes/config.php";

// Limpa todos os dados da sessão

$_SESSION = [];

// Encerra a sessão

session_destroy();

// Volta para o login

header("Location: login.php");

exit;

?>
