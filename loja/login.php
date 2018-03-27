<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location ='loja.php'", 1000);
		}

		function loginfailed() {
			setTimeout("window.location ='registro.php'", 1000);
		}

	</script>
</head>
<body>
	<?php
		include_once("conexao.php");

		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$sql = mysql_query("SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'  ") or die(mysql_error());
		$row = mysql_num_rows($sql);

		$dados = @mysql_fetch_array($sql); 

		if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
			

			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['senha'] = md5($_POST['senha']);
			$_SESSION['cliente'] = $dados['nome'];

			$sql_code = "SELECT senha, email FROM usuario WHERE email = '". $_SESSION['email'] . "'";

			echo "<center>Autenticando..</center>";
			echo "<script>loginsuccessfully()</script>";

		} else {
			echo "<center>Nome de usuário ou senha inválidos!</center>";
			echo "<script>loginfailed()</script>";
		}
	?>


</body>
</html>