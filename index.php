<?php 
	
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: sistema/');
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) && empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su clave';
		}else{

			require_once "conexion.php";

			$user = mysqli_real_escape_string($conection,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

			$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$pass'");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['email']  = $data['correo'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['rol']    = $data['rol'];

				header('location: sistema/');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}


		}

	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Posada Donato | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="img/iconoDonato.jpg">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/posadadonato.jpg);">
					
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							
						</div>

						<div>
							
						</div>
					</div>
					<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							INGRESAR
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>


	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>