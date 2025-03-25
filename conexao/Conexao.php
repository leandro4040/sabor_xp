<?php
$servername = "localhost";
$username = "root";   // Seu usuário do banco de dados
$password = "";       // Sua senha do banco de dados
$dbname = "sabor_xp"; // Nome do banco de dados

// Cria a conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}
?>
