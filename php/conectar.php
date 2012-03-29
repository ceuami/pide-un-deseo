<?php
//Esta funcion hace la conexion a la base de datos.
function conectar(){
	$nameServer = 'localhost';
	$user = 'root';
	$password = '1E5y8La';
	$dataBase = 'pide_un_deseo';
	$idcnx = mysql_connect($nameServer, $user, $password) or die (mysql_error());
	mysql_select_db($dataBase, $idcnx);
}
?>