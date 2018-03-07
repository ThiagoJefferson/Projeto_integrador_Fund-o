<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location ='index.html'", 1000);
		}

		function loginfailed() {
			setTimeout("window.location ='login.html'", 1000);
		}

	</script>
</head>
<body>
	<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$banco = 'skate';
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());

		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$sql = mysql_query("SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'  ") or die(mysql_error());
		$row = mysql_num_rows($sql);

		if ($row > 0) {
			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['email'] = $_POST['email'];

			echo "<center>Autenticando..</center>";
			echo "<script>loginsuccessfully()</script>";

		} else {
			echo "<center>Nome de usuário ou senha inválidos!</center>";
			echo "<script>loginfailed()</script>";
		}
	?>


</body>
</html>