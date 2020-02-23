<html>
<head>
	<title>Agregar mascotas</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$tipo = $_POST['tipo'];
	$raza = $_POST['raza'];
	$nombre = $_POST['nombre'];

	if(empty($tipo) || empty($raza) || empty($nombre)) {
				
		if(empty($tipo)) {
			echo "<font color='red'>Campo: tipo esta vacio.</font><br/>";
		}
		
		if(empty($raza)) {
			echo "<font color='red'>Campo: raza esta vacio.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO trabajadores(tipo, raza, nombre) VALUES(:tipo, :raza, :nombre)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':tipo', $tipo);
		$query->bindparam(':raza', $raza);
		$query->bindparam(':nombre', $nombre);
		$query->execute();
		

		echo "<font color='green'>¡El trabajador ha sido ingresado!";
		echo "<br/><a href='index.php'>Ver actualización</a>";
	}
}
?>
</body>
</html>
