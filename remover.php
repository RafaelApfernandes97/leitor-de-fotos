<?php
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	unset($_SESSION['carrinho'][$id]);
}
header('Location: index.html');
exit();
?>