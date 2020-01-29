<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hospital Municipal Xonacatlan “Vicente Guerrero” Bicentenario </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon3.ico')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/main.css')); ?>">
<!--===============================================================================================-->
<script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    //Add a zero in front of numbers<10
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec;
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>
<style type='text/css'>
.clockdate-wrapper {
    background-color: #B9B2B2;
    padding:15px;
    max-width:300px;
    width:90%;
    text-align:center;
    border-radius:10px;
    margin:0 auto;
    margin-top:15%;
}
#clock{
    background-color:#B9B2B2;
    font-family: sans-serif;
    font-size:20px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
}
#clock span {
    color:#888;
    text-shadow:0px 0px 1px #B9B2B2;
    font-size:3px;
    position:relative;
    top:-27px;
    left:-10px;
}
</style>
</head>
<body onload="startTime()">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo e(asset('login/images/img-01.png')); ?>" alt="IMG">
				<div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>
				</div>




				<form class="login100-form validate-form" action = "<?php echo e(route('validalogin')); ?>" method = 'POST' >
				<?php echo e(csrf_field()); ?>

					<span class="login100-form-title">
						Iniciar Sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "El usuario es requerido">
						<input class="input100" type="email" name="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo del usuario">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button  class="login100-form-btn" >
							<i class="fa fa-sign-in" aria-hidden="true" ></i> Entrar 
						</button>
					</div>
                    <?php if(Session::has('error')): ?>
    <div align='center'>--><?php echo e(Session::get('error')); ?></div>
                       <?php endif; ?>
					 
					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidó contraseña
						</span>
					<!-- 	<a  href="http://localhost/sistema/public/correo" > -->
							<div class="forgot">
									<a href="<?php echo e(URL::action('cusuarios@email')); ?>">Recordar mi contraseña</a>
								</div>
						</a>
						
					</div>


					

				</form>
				
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="<?php echo e(asset('login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('login/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('login/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('login/vendor/tilt/tilt.jquery.min.js')); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('login/js/main.js')); ?>"></script>

</body>
</html>