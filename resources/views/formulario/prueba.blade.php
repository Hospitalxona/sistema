<html> 
<head> 
   	<title>clave acceso</title> 
</head> 

<body> 
<SCRIPT> 
function acceso(){ 
   	window.location = document.formclave.clave.value + "http://google.com" 
} 
</SCRIPT> 

<FORM name=formclave> 
<INPUT type=password name=clave> 
<INPUT type=button value=Acceder onclick="acceso()"> 
</FORM> 

</body> 
</html> 