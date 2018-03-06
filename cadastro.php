<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$banco = 'skate';
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());

		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cep = $_POST['cep'];
		$endereco = $_POST['endereco'];
		$complemento = $_POST['complemento'];

		$sql = mysql_query("INSERT INTO cliente(nome, telefone, email, senha, cep, endereco, complemento) VALUES ('$nome', '$telefone', '$email', '$senha', '$cep', '$endereco', '$complemento')");

		echo "<center><h1>Seu cadastro foi realizado com sucesso!</h1></center>";
	?>

</body>
</html>