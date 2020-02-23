<?php

include_once("config.php");


$result = $dbConn->query("SELECT * FROM residentes ORDER BY id DESC");
?>

<html>
<head>	
	<title>Crear residente</title>
</head>

<body>
<a href="add.html">Adicionar residente</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Identificación</td>
		<td>Nombre</td>
		<td>Apartamento</td>
		<td>Opciones</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['identificacion']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['apartamento']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id]\">Editar</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('¿Está seguro de borrarlo?')\">Borrar</a></td>";		
	}
	?>
	</table>
</body>
</html>

