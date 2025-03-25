<?php
$erro = false;

if (count($_POST) > 0) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];

    if (isset($_POST['enviar'])) {
        // Validação do campo nome
        if (empty($nome) || strlen($nome) < 2 || strlen($nome) > 100) {
            $erro = '<p class="error">Preencha o campo nome corretamente (entre 2 e 100 caracteres).</p>';
            die($erro);
        }

        // Validação da senha (mínimo 6 caracteres por segurança)
        if (empty($senha) || strlen($senha) < 6) {
            $erro = '<p class="error">A senha deve ter no mínimo 6 caracteres.</p>';
            die($erro);
        }

        // Validação do e-mail com filter_var
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro = '<p class="error">Informe um e-mail válido.</p>';
            die($erro);
        }

        // Validação do endereço
        if (empty($endereco)) {
            $erro = '<p class="error">O campo endereço deve ser preenchido.</p>';
            die($erro);
        }

        // Validação da cidade
        if (empty($cidade)) {
            $erro = '<p class="error">O campo cidade deve ser preenchido.</p>';
            die($erro);
        }

        // Validação do telefone (mínimo 8 dígitos)
        if (empty($telefone) || strlen($telefone) < 8) {
            $erro = '<p class="error">Informe um número de telefone válido.</p>';
            die($erro);
        }

        // Validação do CEP (8 dígitos numéricos)
        if (empty($cep) || !preg_match('/^[0-9]{8}$/', $cep)) {
            $erro = '<p class="error">Informe um CEP válido (8 dígitos, sem traço).</p>';
            die($erro);
        }

        // Se não houve erro, insere no banco de dados
        include_once('../conexao/Conexao.php');


        $sqlInsertUsuario = "INSERT INTO tbl_usuarios(nome, senha, email, endereco, cidade, telefone, cep)
            VALUES ('$nome', '$senha', '$email', '$endereco', '$cidade', '$telefone', '$cep')";

        $correto = $mysqli->query($sqlInsertUsuario) || die($mysqli->error);

        if ($correto) {
            echo '<p class="success">Usuário cadastrado com sucesso!</p>';
            unset($_POST);
        }
    }
}
?>
