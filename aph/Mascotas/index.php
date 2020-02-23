<?php

include_once("config.php");


$result = $dbConn->query("SELECT * FROM trabajadores ORDER BY id DESC");
?>

<html>
<head>	
	<title>Crear mascotas</title>
</head>

<body>
<a href="add.html">Adicionar mascotas</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>tipo</td>
		<td>raza</td>
		<td>nombre</td>
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['tipo']."</td>";
		echo "<td>".$row['raza']."</td>";
		echo "<td>".$row['nombre']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id]\">Editar</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('¿Está seguro de borrarlo?')\">Borrar</a></td>";		
	}
	?>
	</table>
</body>
</html>

