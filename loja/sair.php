<?php 
// Inicia sessões, para assim poder destruí-las 
session_start(); 

session_destroy(); 
$_SESSION['email'] = $_POST['email'];
			$_SESSION['senha'] = md5($_POST['senha']);
			$_SESSION['cliente'] = $dados['nome'];
header("Location: registro.php");
exit; 
?>
