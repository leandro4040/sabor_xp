<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Hamburgueria Sabor XP</title>
    <link rel="stylesheet" href="../css/pagina_inicial.css">
</head>
<body>
       
<?php
        // Obtém o nome da página atual
        $pagina = basename($_SERVER['PHP_SELF']);

        // Definir o caminho correto para os arquivos CSS
        $cssPath = "";

        if ($pagina == "pagina_inicial.php") {
            $cssPath = "../css/pagina_inicial.css";
        } elseif ($pagina == "cadastrar.php") {
            $cssPath = "../css/cadastrar.css";
        } elseif ($pagina == "login.php") {
            $cssPath = "../css/login.css";
        }elseif ($pagina == "formulario.php") {
            $cssPath = "../css/formulario_insercao.css";
        }elseif ($pagina == "cardapio.php") {
            $cssPath = "../css/cardapio.css";
        }elseif ($pagina == "exibicao.php") {
            $cssPath = "../css/exibicao_hambugueres.css";
        }

        // Imprime o link para o CSS correto
        if ($cssPath !== "") {
            echo '<link rel="stylesheet" href="'.$cssPath.'">';
        }
    ?>

    <!-- Cabeçalho -->
    <header class="header">
        <img class="logo" src="../img/logo.png" alt="Logo da Hamburgueria">
        <div class="title-container">
            <h1 class="title">Hamburgueria Sabor XP</h1>
        </div>
        <nav class="nav">
            <a href="../pagina_inicial/pagina_inicial.php">Início</a>
            <a href="../login/login.php">Login</a>
            <a href="../cardapio/cardapio.php">Cardápio</a>
            <a href="../formulario_hambugueres/formulario.php">inserção de produto</a>
        </nav>
    </header>
