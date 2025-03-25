<?php
include_once('../conexao/Conexao.php');

// Consulta todos os usuários cadastrados
$sql_usuarios = "SELECT * FROM tbl_usuarios";
$query_usuario = $mysqli->query($sql_usuarios) or die($mysqli->error);
$qtd_usuarios = $query_usuario->num_rows;
?>
