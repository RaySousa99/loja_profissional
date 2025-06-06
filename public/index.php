<!-- public/index.php -->
<?php
require_once __DIR__ . '/../src/models/ProdutoModel.php';
$produtos = getProdutosEmDestaque();
?>
<!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Profissional</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 </head>
 <body>
    <header>
    <div class="topo">
        <h1><i class="fas fa-store"></i> Loja Profissional</h1>
        <form id="form-busca" method="GET">
            <input type="text" name="busca" placeholder="Buscar produtos..." />
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <nav class="menu">
            <a href="#"><i class="fas fa-home"></i> Início</a>
            <a href="#"><i class="fas fa-th-large"></i> Categorias</a>
            <a href="#" id="btn-carrinho">
                <i class="fas fa-shopping-cart"></i>
                <span id="contador-carrinho">0</span>
            </a>
            <a href="#"><i class="fas fa-user"></i> Minha Conta</a>
        </nav>
    </div>
    </header>

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
                    <button class="btn-comprar">Comprar</button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <script src="assets/js/carrinho.js"></script>
  <footer>
    <p>© 2025 Loja Profissional. Todos os direitos reservados.</p>
  </footer>
 </body>
 </html>