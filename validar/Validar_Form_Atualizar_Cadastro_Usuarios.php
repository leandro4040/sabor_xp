<?php
    include_once('../conexao/Conexao.php');
    $cod_usuario = intval($_GET['cod_usuario']);
    $sql_usuario = "SELECT * FROM tbl_usuarios WHERE cod_usuario = '$cod_usuario'";
    $query_usuario = $mysqli->query($sql_usuario) or die($mysqli->error);
    $usuario = $query_usuario->fetch_assoc();

    function limpar_texto($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    if (count($_POST) > 0) {
        $cod_usuario = $_POST['cod_usuario'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];


        if (isset($_POST['enviar'])) {
            // Validação do formulário
            if (empty($_POST['cod_usuario'])) {
                $erro = '<p class="error"> O campo Código do Usuário deverá ser preenchido </p>';
                die();
            }
            if (empty($_POST['nome']) || strlen($_POST['nome']) < 2 || strlen($_POST['nome']) > 100) {
                $erro = '<p class="error"> Preencha o campo Nome corretamente, ou insira um nome válido </p>';
                die();
            }

            if (empty($_POST['senha'])) {
                $erro = '<p class="error"> O campo Senha deverá ser preenchido </p>';
                die();
            }

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $erro = '<p class="error"> O campo E-mail está vazio ou não foi preenchido corretamente </p>';
                die();
            }

            if (empty($_POST['endereco'])) {
                $erro = '<p class="error"> O campo Endereço deverá ser preenchido </p>';
                die();
            }

            if (empty($_POST['cidade'])) {
                $erro = '<p class="error"> O campo Cidade deverá ser preenchido </p>';
                die();
            }

            if (empty($_POST['telefone'])) {
                $erro = '<p class="error"> O campo Telefone deverá ser preenchido </p>';
                die();
            }

            if (empty($_POST['cep'])) {
                $erro = '<p class="error"> O campo CEP deverá ser preenchido </p>';
                die();
            }

            // Se não houve erro, prossegue com a atualização
            $erro = "";

            if ($erro) {
                echo 'O sistema apresenta o seguinte erro: ', $erro;
            } else {
                // SQL para atualização dos dados
                $Cod_Altera_usuario = "UPDATE tbl_usuarios SET
                                        nome = '$nome',
                                        senha = '$senha',
                                        email = '$email',
                                        endereco = '$endereco',
                                        cidade = '$cidade',
                                        telefone = '$telefone',
                                        cep = '$cep'
                                        WHERE cod_usuario = '$cod_usuario'";

                $correto = $mysqli->query($Cod_Altera_usuario) or die($mysqli->error);

                if ($correto) {
                    header('Location: ../cadastrados/Meus_Usuarios_Cadastrados.php');
                    unset($_POST);
                }
            }
        }
    }
?>
