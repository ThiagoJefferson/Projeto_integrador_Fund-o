<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <title>Acessar</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-8HThyWW6Qwbs+q89KCgd0BjyEBdNWp0WwPtSOC1R44+d7CjcyLy0Z/2FPvlCahFG" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/loja.css">
  
  <link rel="stylesheet" href="css/busca.css">
  
  <link rel="stylesheet" href="css/registro.css">
  
<head>
</head>
<body>
<br>

<div class="login">

      <?php
        session_start();
        if( !isset($_SESSION["funcionario"])) {
      ?>
 <div class="dropdown show">
  <a1 class="btn btn-default dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Entrar
  </a1>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="registro.php">Login</a>
    
  </div>
</div>
      <?php
        } else {


      ?> 
     <div class="dropdown show">
  <a1 class="btn btn-default dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Olá, <?php echo $_SESSION["funcionario"]; ?>
  </a1>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
  <a class="navbar-brand" style="font-size: 17px;" href="registro">Houle Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
    </ul>



</nav>
</div>

<div class="formulario">

<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-6 col-xs-12">
<br>
<br>
<br>


<br>

<h1>Faça login para continuar.</h1><br>

<h>Sou um novo funcionário.</h>
<br>
<br>

<form name="registrar" method="get" action="registrar.php">

<input type="submit" name="registrar" style="width: 100px; height: 38px; " class="btn btn-info" value="Cadastrar">

</form>
</div>


<div class="row">
<div class="col-lg-6 col-sm-6 col-xs-12">
<br>
<br>
<br>
<br>
<br>
<br>


<h1>LOGIN</h1>
<br>
<br>
<p>Digite abaixo seu nome e senha cadastrados na loja.</p>
<b>Seu nome:<b>
<br>

<form name="loginform" method="post" action="login.php">

<input size="40" type="text" name="nome" placeholder="example: Paulo" />
<br>
<br>
<b>Sua senha:</b><br>
 <input size="40" type="password"  name="senha" placeholder="senha"/>
<br>
<br>
<input type="submit" name="enviar" value="Acessar" style="width: 100px; height: 38px; " class="btn btn-info"></a>

</form>
</div>
</div>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>