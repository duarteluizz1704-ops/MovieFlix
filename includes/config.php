<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "movieflix";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

if ($conexao->connect_error) {
    die("Erro ao conectar com o banco de dados.");
}

$conexao->set_charset("utf8mb4");

$nomeSite = "MovieFlix";
$slogan = "Alugue. Assista. Avalie.";
$emailContato = "contato@movieflix.com";
$telefoneContato = "(81) 99999-9999";
$anoAtual = date("Y");

?>