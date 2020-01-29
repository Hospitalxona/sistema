<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>


	<script src="http://localhost/sistema/public/laravel/js/lib/dataTables/datatables.min.js"></script>

<script>
           
           	$("#guardar").click(function(){


               $('#users').DataTable({
					
                    
					ajax: {
                url: 'http://localhost/sistema/public/usuarios',
                type: "GET",
                data: {"_token":"7ALsaiosCjHkpWuweRaJ6wBU5V1EQnUw8jnvOJQa"}
                },
					
        
                    "columns": [

                        {data: 'id_usuario', name: 'id_usuario'},
                        
                        {data: 'clues', name: 'clues'},
						{data: 'correo', name: 'correo'},
						{data: 'area', name: 'area'},
						{data: 'user' , name: 'user'},
						{data: 'password' , name: 'password'},
						{data: 'fotoperfil' , name: 'fotoperfil'},
						{data: 'id_unidad', name: 'id_unidad'},
						{data: 'id_trabajador' , name: 'id_trabajador'},
									
						
                        {data: 'btn'},
                    ]			
                  });
               	});
          
       </script>

</head>
<body>
 
 

<center>
	
<h1>Alta usuario</h1>
<h3>Nuevo usuario</h3>

<hr>ID USUARIO: 
<input type="int" name="id_usuario" value="1"><br>
<hr>CLUES de Hospital:
<input type="text" name="clues" value=""><br>
<hr>Correo:
<input type="text" name="correo" value=""><br>

<hr>Area:
<select>
	             <option selected>Quirofano</option>
                    <option value="Urgencias">Urgencias</option>
                        <option value="Triage">Traige</option>
                            <option value="Archivo">Archivo</option>
							    <option value="Sistemas">Sistemas</option>

</select><br>

<hr><hr>Nombre de Usuario:
<input type="text" name="usuario" value=""><br>

<hr><hr>Contraseña:
<input type="password" name="contraseña"  value=" Math.floor((Math.random() * 10) + 1)"><br>

<hr><hr>Foto:
<input type="file" name='fotoperfil' class="form-control"><br>
<br>
<hr>Seleccione unidad Medica:
<select>
	<option>Hospital General de Xonacatlan</option>
	<option>Hospital Lerma</option>
</select><br>	

				<hr><hr>Seleccione Trabajador:
				<select>
					<option> Nombre del trabajador</option>
				</select>  
				<hr><hr><input type="button" id="guardar" value="Guardar"><br>
</table>
</center>
<br>


</body>
</html>