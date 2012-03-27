<?php
	include_once 'conectar.php';
	$traerDeseos = 'SELECT * FROM deseo ORDER BY fecha_creacion';
	conectar();
	$doTraerDeseos = mysql_query($traerDeseos);
	mysql_close();
	if(mysql_num_rows($doTraerDeseos) > 0){
		while ($deseo = mysql_fetch_array($doTraerDeseos)) {
			//$deseos[$id[$deseo['id']]] = array("id" => $deseo['id'], "descripcion" => $deseo['descripcion'], "likes" => $deseo['likes'], "fecha_creacion" => $deseo['fecha_creacion']);
			$id = $deseo['id'];
			$descripcion = $deseo['descripcion'];
			$likes = $deseo['likes'];
			$fecha_creacion = $deseo['fecha_creacion'];
			$deseos[$id] = array("id" => $id, "descripcion" => $descripcion, "likes" => $likes, "fecha_creacion" => $fecha_creacion);
		}
	}
	else{
		echo 'Aun no me piden deseos, ¿quieres pedir uno?';
	}
	?><pre><?php print_r($deseos); ?></pre>