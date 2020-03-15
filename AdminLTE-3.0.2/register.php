<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$secretpin = $_POST['secretpin'];

		if($fullname == '')
			$errMsg = 'Ingrese su Nombre Completo';
		if($username == '')
			$errMsg = 'Ingrese su Usuario';
		if($password == '')
			$errMsg = 'Ingrese su Contraseña';
		if($secretpin == '')
			$errMsg = 'Ingrese su recordatorio';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO users (fullname, username, password, secretpin) VALUES (:fullname, :username, :password, :secretpin)');
				$stmt->execute(array(
					':fullname' => $fullname,
					':username' => $username,
					':password' => $password,
					':secretpin' => $secretpin
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registro Exitoso!!. Ahora puede Ingresar <a href="login.php">Ingreso</a>';
	}
?>

<html>

<head>
    <title>Registro</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
.login-center {
    padding: 2%;
    margin: 2%
}
</style>

<body class="bg-warning d-flex justify-content-center login-center">

    <div class="card text-center h-50">
        <div class="card-body">
            <h2 class="card-title">Registrate</h2>

            <form class="" action="" method="post">
				<div class=" row my-2">
					<div class="col-4">
						<label for="">Nombre completo</label>
					</div>
					<div class="col-8">
						<input type="text" name="fullname" placeholder="Nombre Completo"
						value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>" autocomplete="off"
						class="box">
					</div>
				</div>
				<div class=" row my-2">
					<div class="col-4">
						<label for="">Usuario</label>
					</div>
					<div class="col-8">
						<input type="text" name="username" placeholder="Usuario"
						value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off"
						class="box">
					</div>
				</div>
				<div class="row my-2">
					<div class="col-4">
						<label for="">Contraseña</label>
					</div>
					<div class="col-8">
						<input type="password" name="password" placeholder="Contraseña"
						value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box">
					</div>

				</div>
				<div class="my-2">
					<div>
						<label for="">Pin Que no olvides</label>
					</div>
					<div>
						<input type="text" name="secretpin" placeholder="Pin secreto (numeros)"
						value="<?php if(isset($_POST['secretpin'])) echo $_POST['secretpin'] ?>" autocomplete="off"
						class="box" >
					</div>
				
				</div>
				             
                
                
                <input class="btn btn-outline-primary" type="submit" name='register' value="Registro" class='submit'>
            </form>

        </div>
        <div class="card-footer">
            <span><a class="btn btn-outline-secondary" href="login.php">Volver al inicio</a></span>
        </div>

        <?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
    </div>


</body>

</html>