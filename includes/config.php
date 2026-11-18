<?php 

/**
 * config.php
 *
 * Configura a sessão e a conexão com o banco de dados MovieFlix.
 * Utiliza PDO para permitir que as páginas do sistema acessem o MySQL.
 * A conexão é armazenada na variável $pdo para ser utilizada em outros arquivos.
 */


// Iniciar a sessão

if (session_status() === PHP_SESSION_NONE){
    session_start();
}

// Conexão com o banco de dados

$host = "localhost";
$banco = "movieflix";
$usuario = "root";
$senha = "";

// Tenta a conexão com o banco

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    // Erro do PDO lança exceções quando um comando do SQL falhar

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro) {

    // Se não conectar, interrompe e mostra o motivo

    die("Erro ao conectar ao banco de dados: " . $erro->getMessage());
}
?>