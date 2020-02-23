<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
        $tipo = $_POST['tipo'];
	$raza = $_POST['raza'];
	$nombre = $_POST['nombre'];

	if(empty($tipo) || empty($raza) || empty($nombre)) {
				
		if(empty($tipo)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($raza)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE trabajadores SET tipo=:tipo, raza=:raza, nombre=:nombre WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':tipo', $tipo);
		$query->bindparam(':raza', $raza);
		$query->bindparam(':nombre', $nombre);
		$query->execute();
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM trabajadores WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
        $tipo = $row['tipo'];
	$raza = $row['raza'];
	$nombre = $row['nombre'];
}
?>
<html>
<head>	
	<title>Editar Datos</title>
</head>

<body>
	<a href="index.php">Inicio</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>tipo</td>
				<td><input type="text" name="tipo" value="<?php echo $tipo;?>"></td>
			</tr>
			<tr> 
				<td>raza</td>
				<td><input type="text" name="raza" value="<?php echo $raza;?>"></td>
			</tr>
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

