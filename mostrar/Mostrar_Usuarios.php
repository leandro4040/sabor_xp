<?php { ?>
<center><h1>Lista de Usuários</h1>
<p>Estes são os usuários cadastrados no sistema!</p></center>

<div class="table-wrapper">
<table border="1" cellpadding="10">
    <thead>
        <th>Nome</th>
        <th>Senha</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php include_once ('../listas/Lista_de_Usuarios.php'); ?>
    </tbody>
</table>
</div>
<br><br>
<?php } ?>
