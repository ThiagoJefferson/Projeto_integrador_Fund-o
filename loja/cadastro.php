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
		$email = $_POST['email'];
		$senha = md5($_POST['senha']) ;
		$telefone = $_POST['telefone'];
		$endereco = $_POST['endereco'];
		$cep = $_POST['cep'];
		$complemento = $_POST['complemento'];

		$sql = mysql_query("INSERT INTO cliente(nome, email, senha, telefone, endereco, cep, complemento) VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco', '$cep', '$complemento')");
		
			echo "<center><h>Seu cadastro foi realizado com sucesso</h><br>Você é o nosso novo Cliente!</center>";

			echo "<script>cadastrosuccessfully()</script>";

?>

</body>
</html>