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
<script type="text/javascript"></script>
<script type="text/javascript">
<!--
function validate_password()
{
	//Cogemos los valores actuales del formulario
	pasActual=document.formName.passwordActual;
	pasNew1=document.formName.passwordNew1;
	pasNew2=document.formName.passwordNew2;
	//Cogemos los id's para mostrar los posibles errores
	id_epassActual=document.getElementById("epasswordActual");
	id_epassNew=document.getElementById("epasswordNew1");

	//Patron para los numeros
	var patron1=new RegExp("[0-9]+");
	//Patron para las letras
	var patron2=new RegExp("[a-zA-Z]+");

	if(pasNew1.value==pasNew2.value && pasNew1.value.length>=3 && pasActual.value!="" && pasNew1.value.search(patron1)>=0 && pasNew1.value.search(patron2)>=0){
		//Todo correcto!!!
		return true;
	}else{
		if(pasNew1.value.length<3)
			id_epassNew.innerHTML="La longitud mínima tiene que ser de 6 caracteres";
		else if(pasNew1.value!=pasNew2.value)
			id_epassNew.innerHTML="La copia de la nueva contraseña no coincide";
		else if(pasNew1.value.search(patron1)<0 || pasNew1.value.search(patron2)<0)
			id_epassNew.innerHTML="La contraseña tiene que tener numeros y letras";
		else
			id_epassNew.innerHTML="";
		if(pasActual.value=="")
			id_epassActual.innerHTML="Indicar tu contraseña actual";
		else
			id_epassActual.innerHTML="";
		return false;
	}
}
-->
</script>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="http://localhost/sistema/public/login/images/f2.jpg" alt="IMG">
				
			</div>


                  
<!-- ///////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
 -->


                    			
<form name="formName" action="{{route('guardacontraseña')}}" method="POST" onsubmit='return validate_password()'>
	{{csrf_field()}}
				
					<span class="login100-form-title">
						CAMBIO DE CONTRASEÑA
					</span>
					
	
	<div id="epasswordActual" class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
<input class="input100"  type="password" name="passwordActual" placeholder="Password Actual:">

<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user-circle" aria-hidden="true"></i>
</span>
					</div>

<div id="epasswordNew1" class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
<input class="input100" type="password" name="passwordNew1"   placeholder="Nuevo Passowrd:">

<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user-circle" aria-hidden="true"></i>
</span>
					</div>

<div id="epasswordNew1" class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
<input class="input100" type="password" name="passwordNew2"   placeholder="Repite Passowrd:">

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

					<div></div>
				</form>
		</div>
	</div>
	</div>



