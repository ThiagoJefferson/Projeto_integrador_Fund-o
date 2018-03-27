<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fale Conosco</title>

	<link rel="stylesheet" href="css/loja.css">
    <link rel="stylesheet" href="css/busca.css">
    <link rel="stylesheet" href="css/contato.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-8HThyWW6Qwbs+q89KCgd0BjyEBdNWp0WwPtSOC1R44+d7CjcyLy0Z/2FPvlCahFG" crossorigin="anonymous">

</head>
<body>
<br>

<div class="login">

      <?php
        session_start();
        if( !isset($_SESSION["cliente"])) {
      ?>
 <div class="dropdown show">
  <a1 class="btn btn-default dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Entrar
  </a1>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="registro.php">Login</a>
    <a class="dropdown-item" href="#">Meus Pedidos</a>
    
  </div>
</div>
      <?php
        } else {


      ?> 
     <div class="dropdown show">
  <a1 class="btn btn-default dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Olá, <?php echo $_SESSION["cliente"]; ?>
  </a1>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Meus Pedidos</a>
    <a class="dropdown-item" href="sair.php">Sair</a>
  </div>
</div>

    <?php
      }
    ?>
</div>
</div>

<div class="blocoIcones">
            <input type="text" name="campo" id='campo' style="font-size: 10px;" placeholder="O QUE VOCÊ ESTÁ PROCURANDO">
            <button><?php include "img/magnifier.svg"; ?></button>
        </div>

    <BR>
    <BR>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" style="font-size: 17px;" href="loja.php">MASCULINO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      
     <li class="nav-item active">
        <a class="nav-link" href="camisetas.php">CAMISETAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bermudas.php">BERMUDAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blusas.php">BLUSAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="casacos.php">CASACOS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="moletom.php">MOLETOM</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="bones.php">BONÉS</a>
      </li> 
      <li class="nav-item">
       <a class="nav-link" href="calca.php">CALÇAS</a>
      </li>
      </ul>

</div>
</nav>
<br>
<br>
<br>


<div class="container">
<div class="contato">
<h1>Como podemos ajudar?</h1>
<br>

<a>Nome:</a><br>
<input type="text" name="nome" size="30">
<br>
<br>
<a>Seu e-mail:</a><br>
<input size="30" type="text" name="email" placeholder="" />&nbsp;&nbsp;&nbsp;&nbsp;

<a>Telefone:</a> <input type="text" maxlength="11" border="" name="telefone" size="20">
<br>
<br>
<a>Deixe aqui a sua mensagem:<br></a>
            <textarea name="txtMensagem" style="width: 350px; height: 200px; resize: none;" ></textarea>
            <br/><br/>

<input type="Submit" value="Enviar" class="btn btn-info"> 
    <input type="reset" value="Limpar" class="btn btn-info">

</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
