<?php

require_once "includes/config.php";

// Limpa todos os dados da sessão

$_SESSION = [];

// Encerra a sessão

session_destroy();

// Volta para o login

header("Location: login.php");

exit;

?>
