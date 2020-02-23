<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
    $nombres = $_POST['nombres'];
	$superpoder = $_POST['nombre'];
	$identidad = $_POST['identidad'];

	if(empty($nombres) || empty($superpoder) || empty($identidad)) {
				
		if(empty($nombres)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($superpoder)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($identidad)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$sql = "UPDATE nombres SET nombres=:nombres, superpoder=:superpoder, identidad=:identidad WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':identificacion', $nombres);
		$query->bindparam(':nombre', $superpoder);
		$query->bindparam(':curso', $identidad));
		$query->execute();
		
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM nombre WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$nombres = $row['nombres'];
	$superpoder = $row['superpoder'];
	$identidad = $row['identidad'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombres" value="<?php echo $nombres;?>"></td>
			</tr>
			<tr> 
				<td>Superpoder</td>
				<td><input type="text" name="superpoder" value="<?php echo $superpoder;?>"></td>
			</tr>
			<tr> 
				<td>Identidad</td>
				<td><input type="text" name="identidad" value="<?php echo $identidad;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

