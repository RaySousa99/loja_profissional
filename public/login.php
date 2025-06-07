<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo'] === 'admin') {
        header("Location: admin/painel.php");
    } else {
        header("Location: cliente/painel.php");
    }
}
?>

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
            <a href="index.php"><i class="fas fa-home"></i> Início</a>
            <a href="#"><i class="fas fa-th-large"></i> Categorias</a>
            <a href="#" id="btn-carrinho">
                <i class="fas fa-shopping-cart"></i>
                <span id="contador-carrinho">0</span>
            </a>
            <a href="login.php"><i class="fas fa-user"></i> Minha Conta</a>
        </nav>
    </div>
    </header>

    <main>
        <div class="container-login">
            <h2>Login</h2>
            <?php if (isset($_GET['erro'])): ?>
                <p style="color: red;">E-mail ou senha inválidos</p>
            <?php endif; ?>
            <form action="../src/controllers/AuthController.php" method="post">
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>

    <script src="assets/js/carrinho.js"></script>
  <footer>
    <p>© 2025 Loja Profissional. Todos os direitos reservados.</p>
  </footer>
 </body>
 </html>