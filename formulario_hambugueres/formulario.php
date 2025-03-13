<?php include '../pagina_inicial/topo.php'; ?> <!-- Inclui o topo -->
<div class="body">
<div class="cadastro-container">
        <h2>Adicionar Hambúrguer</h2>
        <form action="../inserir_hamburguers/inserir.php" method="post" enctype="multipart/form-data" class="formulario">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o nome do hambúrguer" required>
            </div>

            <div class="campo">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" placeholder="Descreva o hambúrguer"></textarea>
            </div>

            <div class="campo">
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder="Digite o preço" required>
            </div>

            <div class="campo">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="burgers-do-salz">Burgers do Salz</option>
                    <option value="outros">Outros</option>
                </select>
            </div>

            <div class="campo">
                <label for="imagem">Imagem:</label>
                <input type="file" id="imagem" name="imagem" required>
            </div>

            <button type="submit" class="botao-enviar">Cadastrar</button>
        </form>
    </div>
    </div>
    <?php include '../pagina_inicial/rodape.php'; ?> <!-- Inclui o rodapé -->
