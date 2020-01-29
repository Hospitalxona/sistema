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


                    			
<form action = "<?php echo e(route('guardaemail')); ?>" method = "POST">
	<?php echo e(csrf_field()); ?>

				
					<span class="login100-form-title">
						RECUPERACIÓN DE CONTRASEÑA:
					</span>
					<div class="wrap-input100 validate-input" data-validate = "El correo es requerido">
						<input class="input100" type = 'text' name = 'correo' value="<?php echo e(old('correo')); ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo del usuario">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button  class="login100-form-btn" >
							<i class="fa fa-sign-in" aria-hidden="true" ></i> Enviar
						</button>
					</div>
                   
					 
					 
					

					

				</form>
				

		</div>
	</div>
	