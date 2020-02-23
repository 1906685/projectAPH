<html>
<head>
	<title>Agregar trabajador</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$cargo = $_POST['cargo'];

	if(empty($identificacion) || empty($nombre) || empty($cargo)) {
				
		if(empty($identificacion)) {
			echo "<font color='red'>Campo: identificacion esta vacio.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		
		if(empty($cargo)) {
			echo "<font color='red'>Campo: cargo esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO trabajadores(identificacion, nombre, cargo) VALUES(:identificacion, :nombre, :cargo)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':identificacion', $identificacion);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':cargo', $cargo);
		$query->execute();
		

		echo "<font color='green'>¡El trabajador ha sido ingresado!";
		echo "<br/><a href='index.php'>Ver actualización</a>";
	}
}
?>
</body>
</html>
