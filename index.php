<?php

include_once("config.php");


$result = $dbConn->query("SELECT * FROM nombre ORDER BY id DESC");

?>

<html>
<head>	
	<title>Ingresa tu Super Heroe</title>
</head>

<body>


<a href="add.html">Ingresa tu Super Heroe</a><br/><br/>

	<table width='80%' border=0>

		<tr bgcolor='#CCCCCC'>
			<td>nombres</td>
			<td>Superheroe</td>
			<td>identidad</td>
			<td>Update</td>
		</tr>

		<?php 	
		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
			echo "<tr>";
			echo "<td>".$row['nombres']."</td>";
			echo "<td>".$row['superpoder']."</td>";
			echo "<td>".$row['identidad']."</td>";	
			echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
	</table>
	
</body>
</html>

