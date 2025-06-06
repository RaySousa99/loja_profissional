<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Recebe dados enviados via AJAX
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['nome'], $data['preco'], $data['imagem'])) {
    $_SESSION['carrinho'][] = $data;
    echo json_encode(['sucesso' => true, 'total_itens' => count($_SESSION['carrinho'])]);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Dados inválidos']);
}
?>