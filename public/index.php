<!-- public/index.php -->
<?php
require_once __DIR__ . '/../src/views/partials/header.php';
require_once __DIR__ . '/../src/models/ProdutoModel.php';

$produtos = getProdutosEmDestaque();
?>

<main>
    <section class="produtos">
        <h2>Produtos em Destaque</h2>
        <div class="grid-produtos">
            <?php foreach ($produtos as $produto): ?>
            <!-- Aqui vão os cards de produtos dinâmicos futuramente -->
            <div class="card-produto">
                <img src="assets/images/<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>" />
                <h3><?= $produto['nome'] ?></h3>
                <p class="descricao"><?= $produto['descricao'] ?></p>
                <p>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                <button class="btn-comprar">Adicionar no Carrinho</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../src/views/partials/footer.php'; ?>