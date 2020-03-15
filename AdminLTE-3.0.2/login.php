<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Ingrese un usuario';
		if($password == '')
			$errMsg = 'ingrese una contraseña';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, fullname, username, password, secretpin FROM users WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "Usuario $username no encontrado.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['fullname'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['secretpin'] = $data['secretpin'];

						header('Location: index1.php');
						exit;
					}
					else
						$errMsg = 'Contraseña Incorrecta.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>

<head>
    <title>Proyecto Admin APH</title>

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
/* html,
body {
    margin: 1px;
    border: 0;

}

 */
.login-center {
    padding: 2%;
	margin: 2%
}
</style>

<body class="bg-warning d-flex justify-content-center login-center">

	

    <div class="card text-center h-50">
        <div class="card-body">
            <h2 class="card-title">Inicia Sesión</h2>
            <span>o <a href="register.php">Regístrate</a></span>

            <form action="" method="post">
				<div class="my-2">
					<div>
						<label for="">Usuario</label>
					</div>
					<div>
						<input type="text" name="username" placeholder=""
						value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off"
						class="box">
					</div>
					
				</div>
				<div class="my-2">
					<div>
						<label for="">Contraseña</label>
					</div>
					<div>
						<input type="password" name="password" placeholder=""
						value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off"
						class="box" >
					</div>
					
				</div>
                <input type="submit" name='login' value="Ingresar" class='submit'>
			</form>
			
        </div>
        <div class="card-footer">
			<span><a class="btn btn-outline-secondary" href="forgot.php">Se te olvido la contraseña</a></span>
		
            <span><a class="btn btn-outline-secondary" href="index.php">Vuelve al Inicio</a></span>
        </div>
        <?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
				?>

    </div>




</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>