<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function cadastrosuccessfully() {
			setTimeout("window.location = 'cadastro_produtos.html'", 2000);
		}
	</script>
</head>
<body>
	<?php
		include_once("conexao.php");

		$nome = $_POST['nome'];
		$foto = $_POST['foto'];
		$valor = $_POST['valor'];
		$modelo = $_POST['modelo'] ;
		$marca = $_POST['marca'];
		$cor = $_POST['cor'];

		$sql = mysql_query("INSERT INTO produto(nome, foto, valor, modelo, marca, cor) VALUES ('$nome', '$foto', '$valor', '$modelo', '$marca', '$cor')");
		
		echo "<center><h1>Seu cadastro foi realizado com sucesso!</h1></center>";
		echo "<script>cadastrosuccessfully()</script>";
		
		?>

</body>
</html>