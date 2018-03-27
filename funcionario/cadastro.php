<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function cadastrosuccessfully() {
			setTimeout("window.location ='registro.php'", 2000);
		}


	</script>

</head>
<body>
	<?php
		include_once("conexao.php");

		$nome = $_POST['nome'];
		$rg = $_POST['rg'] ;
		$cpf = $_POST['cpf'];
		$senha = md5($_POST['senha']);
		$endereco = $_POST['endereco'];
		$conta_bancaria = $_POST['conta_bancaria'];

		$sql = mysql_query("INSERT INTO funcionario(nome, rg, cpf, senha, endereco, conta_bancaria) VALUES ('$nome', '$rg', '$cpf', '$senha', '$endereco', '$conta_bancaria')");
		
			echo "<center><h>Seu cadastro foi realizado com sucesso</h><br>Bem vindo a nossa empresa!</center>";

			echo "<script>cadastrosuccessfully()</script>";

?>

</body>
</html>