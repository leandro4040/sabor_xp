<?php if ($qtd_usuarios == 0) { ?>
<tr><!-- inicio da linha -->
    <td colspan="8"> Nenhum usuário foi cadastrado</td>
</tr>
<?php } else {
    while ($usuario = $query_usuario->fetch_assoc()) {
?>
<tr>
    <td><?php echo $usuario['nome']; ?></td>
    <td><?php echo $usuario['senha']; ?></td>
    <td><?php echo $usuario['email']; ?></td>
    <td><?php echo $usuario['endereco']; ?></td>
    <td><?php echo $usuario['cidade']; ?></td>
    <td><?php echo $usuario['telefone']; ?></td>
    <td><?php echo $usuario['cep']; ?></td>
    <td>
        <a href="../formularios/Form_Atualizar_Cadastro_Usuarios.php?cod_usuario=<?php echo $usuario['cod_usuario']; ?>">Editar</a>
        <a href="../excluir/Excluir_Usuarios.php?cod_usuario=<?php echo $usuario['cod_usuario']; ?>">Excluir</a>
    </td>
</tr>
<?php
    }
} ?>
