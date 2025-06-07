<?php
require_once __DIR__ . '/../config/database.php';

function buscarUsuarioPorEmailSenha($email, $senha) {
    $pdo = conectarBanco();
    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = SHA2(?, 256)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $senha]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>