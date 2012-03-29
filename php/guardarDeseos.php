<?php
	include_once 'conectar.php';
	$insert = 'INSERT INTO deseo (descripcion) VALUES ("'.$_POST['deseo'].'");';
	conectar();
	$doInsert = mysql_query($insert);
	mysql_close();
?>
