<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<html>

<head>
    <title>Dashboard</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


<style>
html,
body {
    margin: 1px;
    border: 0;
}
</style>

<body>
    <div style="margin: 15px">
        <div align="center">
            <?php
					if(isset($errMsg)){
						echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
					}
				?>
            <div style=" border: solid 1px #079B96; " align="center">

                <div style="background-color:#006D9C; color:#FFFFFF; padding:10px;">
                    <b><?php echo $_SESSION['name']; ?></b></div>
                <div style="margin: 15px">
                    Bienvenido <?php echo $_SESSION['name']; ?> <br>
                    <a href="update.php">Actualizar</a> <br>
                    <a href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>