<?php
if (session_status() === PHP_SESSION_NONE) session_start();
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
            <a href="index.php"><i class="fas fa-home"></i> Início</a>
            <a href="#"><i class="fas fa-th-large"></i> Categorias</a>
            <a href="#" id="btn-carrinho">
                <i class="fas fa-shopping-cart"></i>
                <span id="contador-carrinho">0</span>
            </a>

            <?php if (isset($_SESSION['usuario'])): ?>
                <a href="<?= $_SESSION['usuario']['tipo'] === 'admin' ? 'admin/painel.php' : 'cliente/painel.php' ?>">
                    <i class="fas fa-user"></i><?= $_SESSION['usuario']['nome'] ?>
                </a>
            <?php else: ?>
                <a href="login.php"><i class="fas fa-user"></i> Minha Conta</a>
            <?php endif; ?>
        </nav>
    </div>
    </header>