<?php
include '../conexao/conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    // Upload da imagem
    $imagem = $_FILES['imagem']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

    $sql = "INSERT INTO hamburgueres (nome, descricao, preco, imagem, categoria) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdss", $nome, $descricao, $preco, $imagem, $categoria);

    if ($stmt->execute()) {
        header("Location: ../exibicao_hamburguers/exibicao.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
}
?>


