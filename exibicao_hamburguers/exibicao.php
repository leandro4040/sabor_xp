
<?php include '../pagina_inicial/topo.php'; ?> <!-- Inclui o topo -->

<?php
include '../conexao/conexao.php'; 
$sql = "SELECT * FROM hamburgueres WHERE categoria = 'burgers-do-salz'";
$result = $conn->query($sql);
?>

    <div class="body">
    <div class="menu">
        <h2>Burgers Doces</h2>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="burger-card">
                <img src="../inserir_hamburguers//uploads/<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>">
                <div class="burger-info">
                    <h3><?php echo $row['nome']; ?></h3>
                    <p><?php echo $row['descricao']; ?></p>
                    <span class="price">R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></span>
                    <button class="add-to-cart">Adicionar ao Carrinho</button>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
    <?php include '../pagina_inicial/rodape.php'; ?> <!-- Inclui o rodapé -->
    
