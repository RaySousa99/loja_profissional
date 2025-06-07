<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="assets/css/style.scss">
</head>
<body>
    <div class="painel">
        <h1>Bem-vindo, <?= $_SESSION['usuario']['nome'] ?> (Administrador)</h1>
        <p>
            <a href="../logout.php">Sair</a>
        </p>
    </div>
</body>
</html>