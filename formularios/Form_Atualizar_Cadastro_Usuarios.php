<?php include_once('../html/Topo.php'); ?>
<?php include_once('../validar/Validar_Form_Atualizar_Cadastro_Usuarios.php');?>
<?php { ?>
<form method="POST" action="">
<div class="form-atualizacao">
<div class="form-container">
<div class="form-group-2">
    <br><br>
    <h1 class="h1">Formulário para Atualizar os Dados do Usuário</h1>
    <p class="error">*Campos com preenchimento obrigatório</p>
</div>
<div class="form-group">
    <div class="label">
        <label for="cod_usuario"><span class="error">* </span> Código do Usuário</label>
    </div>
    <div class="input">
        <input type="number" name="cod_usuario" value="<?php echo $_GET['cod_usuario']; ?>" style="width: 40%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="nome"><span class="error">* </span> Nome do Usuário</label>
    </div>
    <div class="input">
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="senha"><span class="error">* </span> Senha</label>
    </div>
    <div class="input">
        <input type="password" name="senha" value="<?php echo $usuario['senha']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="email"><span class="error">* </span> E-mail</label>
    </div>
    <div class="input">
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="endereco"><span class="error">* </span> Endereço</label>
    </div>
    <div class="input">
        <input type="text" name="endereco" value="<?php echo $usuario['endereco']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="cidade"><span class="error">* </span> Cidade</label>
    </div>
    <div class="input">
        <input type="text" name="cidade" value="<?php echo $usuario['cidade']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="telefone"><span class="error">* </span> Telefone</label>
    </div>
    <div class="input">
        <input type="text" name="telefone" value="<?php echo $usuario['telefone']; ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <div class="label">
        <label for="cep"><span class="error">* </span> CEP</label>
    </div>
    <div class="input">
        <input type="text" name="cep" value="<?php echo ($usuario['cep']); ?>" style="width: 100%;">
    </div>
</div>
<div class="form-group">
    <button type="submit" name="enviar">Atualizar Dados do Usuário</button>
</div>
</div>
</div>
</form>
<?php } ?>
<?php include_once ('../html/Footer.php'); ?>
