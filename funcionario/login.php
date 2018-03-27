<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location ='inicio.php'", 1000);
		}

		function loginfailed() {
			setTimeout("window.location ='registro.php'", 1000);
		}

	</script>
</head>
<body>
	<?php
		include_once("conexao.php");

		$nome = $_POST['nome'];
		$senha = md5($_POST['senha']);
		$sql = mysql_query("SELECT * FROM funcionario WHERE nome = '$nome' and senha = '$senha'  ") or die(mysql_error());
		$row = mysql_num_rows($sql);

		$dados = @mysql_fetch_array($sql); 

		if (isset($_POST['nome']) && strlen($_POST['nome']) > 0) {
			

			session_start();
			$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['senha'] = md5($_POST['senha']);
			$_SESSION['funcionario'] = $dados['nome'];

			$sql_code = "SELECT senha, nome FROM usuario WHERE nome = '". $_SESSION['nome'] . "'";

			echo "<center>Autenticando..</center>";
			echo "<script>loginsuccessfully()</script>";

		} else {
			echo "<center>Informação de nome ou senha inválidos!</center>";
			echo "<script>loginfailed()</script>";
		}
	?>


</body>
</html>