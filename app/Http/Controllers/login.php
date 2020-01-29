<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use App\system;
use Session;

///////////////////////////////////////
use DB;
use Mail;
use Illuminate\Support\Facades\Crypt;
///////////////////////////////////////
class login extends Controller
{
 public function index()
	{

	return view ('login');

	}
	public function validalogin(Request $request)
	{
		$correo = $request->email;
		$password = $request->password;
		$consulta = usuarios::withTrashed()
		                    ->where('correo','=',$correo)
		                    ->where('password','=',$password)
							->get();
		//return $consulta;
	    if(count($consulta)==0)
		{
	Session::flash('error', 'El usuario no existe o la contraseña
                          		 no es correcta');
	return redirect()->route('index');
	echo "no existe";
		}
		else
		{
		 if($consulta[0]->deleted_at !="")
		  {
		Session::flash('error', 'El usuario esta desactivado
		consulte a su administrador');
	return redirect()->route('index');
		  }
		  else
		  {
		  Session::put('sesionname',$consulta[0]->user);
		  Session::put('sesionidu',$consulta[0]->id_usuario);
		  Session::put('sesiontipo',$consulta[0]->area);
		  Session::put('sesionfoto',$consulta[0]->fotoperfil);
		  Session::put('sesionidt',$consulta[0]->id_trabajador);
		  Session::put('nom_system',$consulta[0]->nom_system);
	
	if ($consulta[0]->pregunta==0) {
		DB::select("UPDATE usuarios SET pregunta=1 WHERE id_usuario=".$consulta[0]->id_usuario);
	

	   echo '<script type="text/javascript">
	var button = confirm("Quiere cambiar la contraseña");
	if (button) {
		location.href ="http://localhost/sistema/public/password";
	}
	
</script>';
}
		 return view('datatables.sistema_inicio');
		  }
		  
		 
		}
		
	}	
	public function inicio()


	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			if(Session::get('sesiontipo')=="Archivo"){
			 return view ('archivo.busquedaexxpedientes');
		 }
			else{
	     return view ('datatables.sistema_inicio');
			}
		}
	}
	
	public function cerrarsesion()
	{
	   Session::forget('sesionname');
	   Session::forget('sesionidu');
	   Session::forget('sesiontipo');
	   Session::forget('sesionfoto');
	   Session::forget('sesionidt');
	   Session::flush();
	   Session::flash('error', 'Sesión cerrada Correctamente');
	   return redirect()->route('index');
	   	}
	


public function cambiodecontraseña()
{
	return view('formulario.contraseña');
}

public function guardacambiodecontraseña(Request $request)
{
 

 /////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////
	/////7////////////////////////////
 $passwordActual = $request->input("passwordActual");
    $passwordNew1= $request->input("passwordNew1");
    $passwordNew2 = $request->input("passwordNew2");

  $enc=DB::select("SELECT * FROM usuarios where password='$passwordActual'");


  
  	  if ($enc!=null){
  	  	DB::select("UPDATE usuarios SET password='$passwordNew1' WHERE id_usuario=".$enc[0]->id_usuario);
  	  	 echo "<script> alert('CAMBIO DE CONTRASEÑA ¡EXITOSO!')</script>";
  	  }
  	 else
  	 {
 echo "<script> alert('La Contraseña Actual no es correcta')</script>";

 return view('formulario.contraseña');
  	 }


	return view('login');


  }

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
	



 




















   

}
    