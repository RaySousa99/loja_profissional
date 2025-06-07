<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
</head>
<body>
    <h1>Bem-vindo, <?= $_SESSION['usuario']['nome'] ?>!</h1>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
