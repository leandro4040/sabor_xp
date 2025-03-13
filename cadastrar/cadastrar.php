<?php include '../pagina_inicial/topo.php'; ?> <!-- Inclui o topo -->

    <section class="cadastro-container">
        <h2>Cadastre-se</h2>
        <form action="#" method="POST" class="formulario">
            <div class="coluna">
                <div class="campo">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="campo">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
                </div>
            </div>
            <div class="coluna">
                <div class="campo">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
                </div>
                <div class="campo">
                    <label for="cidade">Cidade:</label>
                    <select id="cidade" name="cidade" required>
                        <option value="" disabled selected>Selecione sua cidade</option>
                        <option value="São Paulo">Samambaia Norte</option>
                        <option value="Rio de Janeiro">taguatinga Norte</option>
                        <option value="Belo Horizonte">Ceilândia</option>
                        <option value="Brasília">Águas Claras</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
                </div>
            </div>
            <button type="submit" class="botao-enviar">Cadastrar</button>
        </form>
    </section>
    <?php include '../pagina_inicial/rodape.php'; ?> <!-- Inclui o rodapé -->

