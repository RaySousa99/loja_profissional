<?php
require_once __DIR__ . '/../models/Usuario.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $usuario = buscarUsuarioPorEmailSenha($email, $senha);

    // Verifica se o login foi bem-sucedido
    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        
        // Redireciona com base no tipo
        $tipo = $usuario['tipo'];
        header("Location: $tipo/painel.php");
        exit;
    } else {
        header("Location: ../../public/login.php?erro=1");
        exit;
    }
}
?>