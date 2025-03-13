<?php include '../pagina_inicial/topo.php'; ?> <!-- Inclui o topo -->

<section class="cadastro-container">
    <h2>Login</h2>
    <form action="#" method="POST" class="formulario">
        <div class="campo">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="campo">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="botao-enviar">Entrar</button>

        <!-- Adicionando o link para cadastro -->
        <p class="nao-tem-conta">Não tem uma conta? <a href="../cadastrar/cadastrar.php">Cadastre-se aqui</a></p>
    </form>
</section>

<?php include '../pagina_inicial/rodape.php'; ?> <!-- Inclui o rodapé -->
