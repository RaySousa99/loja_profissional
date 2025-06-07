<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'cliente') {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Cliente</title>
    <link rel="stylesheet" href="../assets/css/style.scss">
</head>
<body>
    <div class="painel">
        <h1>Olá, <?= htmlspecialchars($_SESSION['usuario']['nome']) ?>! Bem-vindo à loja.</h1>
        <p>
            <a href="../logout.php">Sair</a>
        </p>
    </div>
</body>
</html>