<?php { ?>
  <form method="post" action="" class="form-cadastro" enctype="multipart/form-data">
    <h1 class="form-title">Cadastro de Produto - Hambúrguer</h1>

    <!-- Grid com duas colunas -->
    <div class="form-grid">
      <div class="form-group">
        <label for="nome_produto" class="label">Nome do Produto:</label>
        <div class="input">
          <input type="text" id="nome_produto" name="nome_produto" value="<?php if(isset($_POST['nome_produto'])) echo $_POST['nome_produto']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="preco" class="label">Preço:</label>
        <div class="input">
          <input type="number" id="preco" name="preco" value="<?php if(isset($_POST['preco'])) echo $_POST['preco']; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="foto_produto" class="label">Foto do Produto:</label>
        <div class="input">
          <input type="file" id="foto_produto" name="foto_produto" accept="image/*" required>
        </div>
      </div>

      <!-- Novo campo de categoria -->
      <div class="form-group">
        <label for="categoria" class="label">Categoria:</label>
        <div class="input">
          <select id="categoria" name="categoria" required>
            <option value="" disabled selected>Selecione a categoria</option>
            <option value="hamburguer">Hambúrgueres</option>
            <option value="bebida">Bebidas</option>
            <option value="sobremesa">Sobremesas</option>
          </select>
        </div>
      </div>
    </div> <!-- Fim da form-grid -->

    <!-- Descrição do produto com botão "ver descrição" -->
    <div class="form-group">
      <label for="descricao_produto" class="label">Descrição do Produto:</label>
      <div class="input">
        <textarea id="descricao_produto" name="descricao_produto" rows="4" required><?php if(isset($_POST['descricao_produto'])) echo $_POST['descricao_produto']; ?></textarea>
      </div>
    </div>
    
    <button type="submit" name="enviar">Cadastrar Produto</button>
  </form>
<?php } ?>
