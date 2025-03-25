<?php { ?>
  <form method="post" action="" class="form-cadastro">
    <h1 class="form-title">Login</h1>

    <div class="form-group">
      <label for="email" class="label">E-mail:</label>
      <div class="input">
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label for="senha" class="label">Senha:</label>
      <div class="input">
        <input type="password" id="senha" name="senha" required>
      </div>
    </div>

    <div class="form-group">
      <label for="tipo_usuario" class="label">Tipo de Usuário:</label>
      <div class="input">
        <select id="tipo_usuario" name="tipo_usuario" required>
          <option value="" disabled selected>Selecione...</option>
          <option value="cliente">Cliente</option>
          <option value="admin">Administrador</option>
        </select>
      </div>
    </div>

    <button type="submit" name="login">Entrar</button>

    <!-- Link para cadastro -->
    <div class="form-group form-link">
      <p>Não tem um cadastro? <a href="../formularios/Cadastrar_Usuarios.php">Clique aqui para se cadastrar</a></p>
    </div>
  </form>
<?php } ?>