<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hospital Municipal Xonacatlan “Vicente Guerrero” Bicentenario </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://localhost/sistema/public/login/images/icons/favicon3.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/sistema/public/login/css/main.css">
<!--===============================================================================================-->


</style>
</head>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="http://localhost/sistema/public/login/images/f1.jpg" alt="IMG">
				
			</div>







<form action = "<?php echo e(route('enviar')); ?>" method = "POST">
							<?php echo e(csrf_field()); ?>

			<span class="login100-form-title" >
						Recuperación de Contraseña:
					</span>

					<div class="wrap-input100 validate-input" data-validate = "El usuario es requerido">
						<input class="input100" type="email" name="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="ingresar tu correo">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button  class="login100-form-btn">
							<i class="fa fa-user-circle" aria-hidden="true" style="margin-right: 5px;"></i> Recuperar 
						</button>
					</div>
                    					 
					

					

				</form>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="http://localhost/sistema/public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/sistema/public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/sistema/public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/sistema/public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/sistema/public/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="http://localhost/sistema/public/login/js/main.js"></script>

</body>
</html>