<link rel="stylesheet" href="../css//Validar_Excluir_Usuarios.css">
<?php
if(isset($_POST['enviar'])) {
    include("../conexao/Conexao.php");
    $cod_usuario = intval($_GET['cod_usuario']);
    $sql_code = "DELETE FROM tbl_usuarios WHERE cod_usuario = '$cod_usuario'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    
    if ($sql_query) { ?>
       <div class="form-excluir">
        <h1 class="form-title">Usuário excluído com sucesso!</h1>
        <a href="../cadastrados/Meus_Usuarios_Cadastrados.php">voltar para a lista de usuários</a>
         </div>
    <?php
    die();
    }
}
?>
