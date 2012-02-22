<?php
	include_once 'conectar.php';
	$traerDeseos = 'SELECT * FROM deseos ORDER BY fecha';
	conectar();
	$doTraerDeseos = mysql_query($traerDeseos);
	mysql_close();
	if(mysql_num_rows($doTraerDeseos) > 0){
		while ($deseo = mysql_fetch_array($doTraerDeseos)) {
			?>
				<span id="<?php echo $deseo['deseoId']; ?>" name="<?php echo $deseo['deseoId']; ?>" >
					<?php echo $deseo['deseo']; ?>
					<?php echo $deseo['imasmas']; ?>
					<?php echo $deseo['fecha']; ?>
				</span>
			<?php
		}
	}
	else{
		echo 'Aun no me piden deseos, ¿quieres pedir uno?';
	}
?>