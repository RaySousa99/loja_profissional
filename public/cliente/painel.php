<?php
require_once __DIR__ . '/../../src/views/partials/header.php';

// Verifica se é cliente
if (!isset($_SESSION['usuario']['tipo']) || $_SESSION['usuario']['tipo'] !== 'cliente') {
    header("Location: /login.php");
    exit;
}

?>

<main>
    <div class="painel-cliente">
        <h2>Bem-vindo, <?= $_SESSION['usuario']['nome'] ?>!</h2>
        <p>Você está no seu painel de cliente.</p>
        <ul>
            <li><a href="#">Meus pedidos</a></li>
            <li><a href="#">Meus dados</a></li>
            <li><a href="../logout.php">Sair</a></li>
        </ul>
    </div>
</main>

<?php require_once __DIR__ . '/../../src/views/partials/footer.php'; ?>