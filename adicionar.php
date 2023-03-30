<?php
session_start();
if (isset($_POST['id']) && isset($_POST['foto'])) {
    $id = $_POST['id'];
    $foto = $_POST['foto'];


    $item = array(
        'id' => $id,
        'foto' => $nome,
        
    );

    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$id] = $item;
    }
}
header('Location: index.html');
exit();
?>