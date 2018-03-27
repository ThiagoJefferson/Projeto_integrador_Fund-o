<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$banco = 'skate';
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());

    define('_HOST_NAME','localhost');
    define('_DATABASE_NAME','skate');
    define('_DATABASE_USER_NAME','root');
    define('_DATABASE_PASSWORD','');



  $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);

	 
	if($MySQLiconn->connect_errno)
	{
		die("ERRO : -> ".$MySQLiconn->connect_error);
	}
?>