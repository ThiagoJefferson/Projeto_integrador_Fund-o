<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function cadastrosuccessfully() {
			setTimeout("window.location ='login.html'", 2000);
		}
	</script>

</head>
<body>
	<?php
		include_once("conexao.php");

		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']) ;
		$cep = $_POST['cep'];
		$endereco = $_POST['endereco'];
		$complemento = $_POST['complemento'];

		$sql = mysql_query("INSERT INTO cliente(nome, telefone, email, senha, cep, endereco, complemento) VALUES ('$nome', '$telefone', '$email', '$senha', '$cep', '$endereco', '$complemento')");
		
			echo "<center><h1>Seu cadastro foi realizado com sucesso!</h1></center>";
			echo "<script>cadastrosuccessfully()</script>";

?>

</body>
</html>