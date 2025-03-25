<?php include '../validar/Validar_Excluir_Usuarios.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css//Excluir.css">
    <title>Excluir Usuário</title>
</head>
<body>
<div class="confirm-container">
        <h1>Tem certeza de que deseja excluir este Usuário?</h1>
        <form action="" method="post">
            <button><a href="../cadastrados/Meus_Usuarios_Cadastrados.php">Não</a></button>
            <button type="submit" name="enviar" value="1">Sim</button>
        </form>
    </div>
   