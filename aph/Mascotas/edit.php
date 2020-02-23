<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
        $identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$cargo = $_POST['cargo'];

	if(empty($identificacion) || empty($nombre) || empty($cargo)) {
				
		if(empty($identificacion)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($cargo)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE trabajadores SET identificacion=:identificacion, nombre=:nombre, cargo=:cargo WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':identificacion', $identificacion);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':cargo', $cargo);
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
        $identificacion = $row['identificacion'];
	$nombre = $row['nombre'];
	$cargo = $row['cargo'];
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
				<td>Identificación</td>
				<td><input type="text" name="identificacion" value="<?php echo $identificacion;?>"></td>
			</tr>
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr> 
				<td>cargo</td>
				<td><input type="text" name="cargo" value="<?php echo $cargo;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

