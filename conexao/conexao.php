<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sabor_xp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
