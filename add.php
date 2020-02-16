<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	

	$nombres = $_POST['nombres'];
	$superpoder = $_POST['superpoder'];
	$identidad = $_POST['identidad'];		

	if(empty($nombres) || empty($superpoder) || empty($identidad)) {
				
		if(empty($nombres)) {
			echo "<font color='red'>Campo: identificacion esta vacio.</font><br/>";
		}
		
		if(empty($superpoder)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		
		if(empty($identidad)) {
			echo "<font color='red'>Campo: curso esta vacio.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} 
	
	else { 

		$sql = "INSERT INTO nombre(nombres, superpoder, identidad) VALUES(:nombres, :superpoder, :identidad)";
		$query = $dbConn->prepare($sql);	

		$query->bindparam(':nombres', $nombres);
		$query->bindparam(':superpoder', $superpoder);
		$query->bindparam(':identidad', $identidad);
		$query->execute();
	
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
