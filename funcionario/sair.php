<?php 
// Inicia sessões, para assim poder destruí-las 
session_start(); 

session_destroy(); 
$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['senha'] = md5($_POST['senha']);
			$_SESSION['funcionario'] = $dados['nome'];
header("Location: registro.php");
exit; 
?>
