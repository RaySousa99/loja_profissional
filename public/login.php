<?php
require_once __DIR__ . '/../src/views/partials/header.php';

if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo'] === 'admin') {
        header("Location: admin/painel.php");
    } else {
        header("Location: cliente/painel.php");
    }
}
?>

<main>
    <div class="container-login">
        <h2><i class="fas fa-sign-in-alt"></i> Login</h2>

        <?php if (isset($_GET['erro'])): ?>
            <div class="mensagem-erro">
                <i class="fas fa-exclamation-triangle"></i> E-mail ou senha inválidos
            </div>
        <?php endif; ?>

        <form action="../src/controllers/AuthController.php" method="post">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>

            <button type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
        </form>
    </div>
</main>

<?php require_once __DIR__ . '/../src/views/partials/footer.php'; ?>