<html>
<head>
	<title>Agregar residente</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$apartamento = $_POST['apartamento'];		

	if(empty($identificacion) || empty($nombre) || empty($apartamento)) {
				
		if(empty($identificacion)) {
			echo "<font color='red'>Campo: identificacion esta vacio.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		
		if(empty($apartamento)) {
			echo "<font color='red'>Campo: apartamento esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO residentes(identificacion, nombre, apartamento) VALUES(:identificacion, :nombre, :apartamento)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':identificacion', $identificacion);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':apartamento', $apartamento);
		$query->execute();
		

		echo "<font color='green'>¡El residente ha sido ingresado!";
		echo "<br/><a href='index.php'>Ver actualización</a>";
	}
}
?>
</body>
</html>
