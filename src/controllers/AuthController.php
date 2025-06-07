<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $usuario = buscarUsuarioPorEmailSenha($email, $senha);

    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        header("Location: ../../public/dashboard.php");
        exit;
    } else {
        header("Location: ../../public/login.php?erro=1");
        exit;
    }
}
?>