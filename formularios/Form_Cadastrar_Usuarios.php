<?php { ?>
  <form method="post" action="../validar/Validar_Form_Cadastrar_Usuarios.php" class="form-cadastro">
    <h1 class="form-title">Cadastro de usuário</h1>

    <!-- Grid com duas colunas -->
    <div class="form-grid">
      <div class="form-group">
        <label for="nome" class="label">Nome:</label>
        <div class="input">
          <input type="text" id="nome" name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="senha" class="label">Senha:</label>
        <div class="input">
          <input type="password" id="senha" name="senha" required>
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="label">E-mail:</label>
        <div class="input">
          <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="endereco" class="label">Endereço:</label>
        <div class="input">
          <input type="text" id="endereco" name="endereco" value="<?php if(isset($_POST['endereco'])) echo $_POST['endereco']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="cidade" class="label">Cidade:</label>
        <div class="input">
          <input type="text" id="cidade" name="cidade" value="<?php if(isset($_POST['cidade'])) echo $_POST['cidade']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="telefone" class="label">Telefone:</label>
        <div class="input">
          <input type="tel" id="telefone" name="telefone" value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" required>
        </div>
      </div>
    </div> <!-- Fim da form-grid -->

    <!-- Campo CEP centralizado -->
    <div class="form-group form-cep">
      <label for="cep" class="label label-cep">CEP:</label>
      <div class="input">
        <input type="text" id="cep" name="cep" value="<?php if(isset($_POST['cep'])) echo $_POST['cep']; ?>" required>
      </div>
    </div>

    <button type="submit" name="enviar">Cadastrar</button>
  </form>
<?php } ?>