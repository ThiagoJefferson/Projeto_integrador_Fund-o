<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Registrar Conta</title>
	
	 <link rel="stylesheet" href="css/loja.css">
  <link rel="stylesheet" href="css/busca.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/registrar.css">

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



<div class="container">

<div class="registrar">
<br>
<br>

<h1>Cadastrar conta.</h1>
<br>
<br>


<h><b>Dados Pessoais:</h></b>
<form method="post" action="cadastro.php">
<br>
<br>
<a1>Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a1><input type="text" name="nome" size="30">
<br>
<br>
<a1>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a1> <input type="text" name="email" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Senha:&nbsp; <input type="password" name="senha" size="30">
<br>
<br>
<a1>Telefone:&nbsp;&nbsp;</a1> <input type="text" maxlength="11" border="" name="telefone" size="30"> 
<br>
<br>

<h><b>Localidade:</h></b>
<br>
<br>

<a1>Endereço:&nbsp;</a1> <input type="text" name="endereco" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a1>CEP:&nbsp;</a1> <input type="text" maxlength="8" name="cep" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a1>Complemento:</a1>&nbsp; <input type="text" name="complemento" size="30">
<br>
<br>
<br>
<br>

<table>
    <tr>
       <td width="500">
           
                
              <input type="submit" name="enviar" style="width: 100px; height: 38px; " class="btn btn-info" value="Continuar">
           </form>
       
       </td>
       
       <td width="20000">
           
              <form name="registro" method="get" action="registro.php">
              <input type="submit" name="registro" style="width: 100px; height: 38px; " class="btn btn-info" value="Voltar">
           </form>
       </td>
    </tr>
</table>



</div>
</div>
</form>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>