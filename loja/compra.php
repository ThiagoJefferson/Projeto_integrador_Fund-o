<?php
	include_once("conexao.php");

        $res = $MySQLiconn->query("SELECT * FROM produto WHERE modelo = '$row'");
        while($row=$res->fetch_array())
        {


?>

<?php
    }
?>