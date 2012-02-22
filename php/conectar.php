<?php
//Esta funcion hace la conexion a la base de datos.
function conectar(){
	$nameServer = '';
	$user = '';
	$password = '';
	$dataBase = '';
	$idcnx = mysql_connect($nameServer, $user, $password) or die (mysql_error());
	mysql_select_db($dataBase, $idcnx);
}
?>