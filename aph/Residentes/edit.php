<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
        $identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$apartamento = $_POST['apartamento'];

	if(empty($identificacion) || empty($nombre) || empty($apartamento)) {
				
		if(empty($identificacion)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($apartamento)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE residentes SET identificacion=:identificacion, nombre=:nombre, apartamento=:apartamento WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':identificacion', $identificacion);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':apartamento', $apartamento);
		$query->execute();
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM residentes WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
        $identificacion = $row['identificacion'];
	$nombre = $row['nombre'];
	$apartamento = $row['apartamento'];
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
				<td>Apartamento</td>
				<td><input type="text" name="apartamento" value="<?php echo $apartamento;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

