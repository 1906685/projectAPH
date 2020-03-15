<?php
	require 'config.php';

	if(isset($_POST['forgotpass'])) {
		$errMsg = '';

		// Getting data from FROM
		$secretpin = $_POST['secretpin'];

		if(empty($secretpin))
			$errMsg = 'Por favor ingrese su pin secreto para recordar su contraseña.';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT password, secretpin FROM users WHERE secretpin = :secretpin');
				$stmt->execute(array(
					':secretpin' => $secretpin
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				if($secretpin == $data['secretpin']) {
					$viewpass = 'Su Contraseña es: ' . $data['password'] . '<br><a href="login.php">Ingrese Ahora!!</a>';
				}
				else {
					$errMsg = 'No coincide el Pin Secreto.';
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
    <title>Olvido Contraseña</title>
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
            <h2 class="card-title">Restaurar Contraseña</h2>
            <form  action="" method="post">
				<div class="my-2">

					<div>
						<label for="">ingresa tu pin secreto</label>
					</div>
					<div>
						<input type="text" name="secretpin" placeholder="Pin Secreto" autocomplete="off"
						class="box">
					</div>
				</div>
					
                <input class="btn btn-outline-primary" type="submit" name='forgotpass' value="Validar" class='submit'>
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

        <?php
					if(isset($viewpass)){
						echo '<div style="color:#198E35;text-align:center;font-size:17px;margin-top:5px">'.$viewpass.'</div>';
					}
			?>

    </div>

</body>

</html>