<?php
if(isset($_POST['enviar'])) {
    include("../conexao/Conexao.php");
    $cod_usuario = intval($_GET['cod_usuario']);
    $sql_code = "DELETE FROM tbl_usuarios WHERE cod_usuario = '$cod_usuario'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    
    if ($sql_query) { ?>
        <h1>Usuário excluído com sucesso!</h1>
        <p><a href="../cadastrados/Meus_Usuarios_Cadastrados.php">Clique aqui</a> para voltar para a lista de usuários!</p>
    <?php
    die();
    }
}
?>
