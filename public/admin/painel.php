<?php
require_once __DIR__ . '/../../src/views/partials/header.php';

// Verifica se é admin
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'admin') {
    header("Location: /login.php");
    exit;
}
?>

<main>
    <div class="painel-admin">
        <h2>Bem-vindo, <?= $_SESSION['usuario']['nome'] ?> (Admin)!</h2>
        <ul>
            <li><a href="#">Gerenciar produtos</a></li>
            <li><a href="#">Pedidos dos clientes</a></li>
            <li><a href="#">Configurações da loja</a></li>
            <li><a href="../logout.php">Sair</a></li>
        </ul>
    </div>
</main>

<?php require_once __DIR__ . '/../../src/views/partials/footer.php'; ?>
