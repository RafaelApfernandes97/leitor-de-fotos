<?php

session_start();

if (!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

if (isset($_GET['imagem'])) {
	$_SESSION['carrinho'][] = $_GET['imagem'];
}

header('Location: carrinho.php');
exit;

?>
