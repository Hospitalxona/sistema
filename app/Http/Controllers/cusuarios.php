<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\usuarios;
use App\system;
use App\unidades;
use Mail;
use App\recetas_medicas;
use App\citas;
use App\doctores;
use App\consultorios;
use App\areas;
use App\expedientes;
use App\pacientes;
use App\trabajadores;
use App\cie10;
use Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\historial_expedientes;
use App\resultadosexp;
use Yajra\Datatables\Datatables;
use App\minventarios;
use App\tb_cie10;


use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


use Session;
class cusuarios extends Controller
{
	public function principal()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		
		    return view('datatables.dtusuario');

	     }}






    public function altausuarios()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = usuarios::withTrashed()->orderBy('id_usuario','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idus=1;
	}
	else{
		$idus = $clavequesigue[0]->id_usuario+1;
	}

	$areas = areas::all();

	$unidades = unidades::orderBy('nom_unidad','desc')->get();
	$trabajadores = trabajadores::where('Usuario','!=','No')
		                      ->orderBy('nombre_tra','asc')
							  ->get();						  
      return view ("altausuarios")
	  ->with('unidades',$unidades)
	  ->with('trabajadores',$trabajadores)
	  ->with('idus',$idus)
	  ->with('areas',$areas);

    }}
	public function guardausuario(Request $request)
    {
		$id_usuario= $request->id_usuario;
		$clues=$request->clues;
        $correo = $request->correo;
		$area = $request->area;
        $user = $request->user;
		$password = $request->password;
		$id_unidad = $request->id_unidad;
		$id_trabajador = $request->id_trabajador;
		
        $this->validate($request,[
		 'clues'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'correo'=>['email'],
		 'password'=>['alpha_num'],
         'user'=>['alpha_num'],
		 'password'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'fotoperfil'=>'image|mimes:jpeg,jpg,png,gif'
	     ]);
         
     $file = $request->file('fotoperfil');
	 if($file!="")
	 {

	 $img = $file->getClientOriginalName();
	 $img2 = $img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
		 $img2 = "sinfoto.png";
	 }
	 
            $usuar = new usuarios;
			$usuar->id_usuario = $request->id_usuario;
			$usuar->clues = $request->clues;
			$usuar->correo = $request->correo;
			$usuar->area = $request->area;
			$usuar->user = $request->user;
			$usuar->password = $request->password;
			$usuar->fotoperfil = $img2;
			$usuar->id_unidad = $request->clues;
			$usuar->id_trabajador = $request->id_trabajador;
			$usuar->save();
    
	$Usuario = $request->Usuario;	

			
	return redirect()->route('principal');
 
    }
	
		public function perfilusuario()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$idu=Session::get('sesionidu');	
		$idt=Session::get('sesionidt');	
		$usuarios= usuarios::where('Id_usuario','=',$idu)->get();
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		return view('perfilusuario')
		->with('usuarios',$usuarios[0])
		->with('trabajadores',$trabajadores[0]);
	}}
	public function desactivau($id_usuario)
	{
	usuarios::find($id_usuario)->delete();
	
	return redirect()->route('principal');
	}
	public function restaurau($id_usuario)
	{
usuarios::withTrashed()->where('id_usuario',$id_usuario)->restore();
return redirect()->route('principal');
	}
	public function eliminau($id_usuario)
	{

$usuarios= usuarios::withTrashed()->where('id_usuario','=',$id_usuario)->get();
$id_trabajador = $usuarios[0]->id_trabajador;	
$trabajador = trabajadores::find($id_trabajador);
$trabajador->Usuario = 'No';
$trabajador->save();
usuarios::withTrashed()->where('id_usuario',$id_usuario)->forceDelete();			
return redirect()->route('principal');
    }
	public function modificau($id_usuario)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$usuarios= usuarios::where('id_usuario','=',$id_usuario)->get();
		$id_unidad = $usuarios[0]->id_unidad;
		$unidad = unidades::where('id_unidad','=',$id_unidad)->get();
		$todasdemas = unidades::where('id_unidad','!=',$id_unidad)
		                        ->orderBy('nom_unidad','asc')
								->get();
		$id_trabajador = $usuarios[0]->id_trabajador;
		$trabajador = trabajadores::where('id_trabajador','=',$id_trabajador)->get();
		$todasdemast = trabajadores::where('id_trabajador','!=',$id_trabajador)
		                        ->orderBy('nombre_tra','asc')
								->get();
		$area = $usuarios[0]->area;
		return view('modificausuarios')
		->with('usuarios',$usuarios[0])
		->with('id_unidad',$id_unidad)
		->with('unidad',$unidad[0]->nom_unidad)
		->with('todasdemas',$todasdemas)
		->with('id_trabajador',$id_trabajador)
		->with('trabajador',$trabajador[0])
		->with('todasdemast',$todasdemast)

		->with('area',$area);
	}}
	
	public function modificausuario(Request $request)
	{
		
		$id_usuario= $request->id_usuario;
		$clues= $request->clues;
        $correo = $request->correo;
		$area = $request->area;
        $user = $request->user;
		$password = $request->password;
	
        $this->validate($request,[
        	'clues'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'correo'=>['email'],
		 'password'=>['alpha_num'],
         'user'=>['alpha_num'],
		 'password'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'fotoperfil'=>'image|mimes:jpeg,jpg,png,gif'
	     ]);
         
		 
	 $file = $request->file('fotoperfil');
	 if($file!="")
	 {
////////////////////////////////////////////////////////////////////
	 	///////////////Quitar///////////////////////////////
	 	///////////////////////////////////////////////////////////
	 $img = $file->getClientOriginalName();
	 $img2 = $img;

	 ////////////////////////////////////////////////////////////////////
	 	///////////////////////////////////////////////////////////
	 	///////////////////////////////////////////////////////////
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	        $usuar = usuarios::find($id_usuario);
			$usuar->id_usuario = $request->id_usuario;
			$usuar->clues= $request->clues;
			$usuar->correo = $request->correo;
			$usuar->area = $request->area;
			$usuar->user = $request->user;
			$usuar->password = $request->password;
			if($file!="")
			{
			$usuar->fotoperfil = $img2;
			}
	
			
			$usuar->save();
	 ////return view ('modificausuario');

			///////////////////PASAR CODIGO///////////////////////////

			
    
    
     
     
      echo"<script type=\"text/javascript\">alert(' Cambios Guardados Satisfactoriamente.'); window.location='sistema_inicio';</script>";
 
       
   

			return view('datatables.sistema_inicio');


			/////////////////////////////////////////////
			/////////////////////////////////////////////

         
	}

	public function modu()
	{
		return view ('modificausuario');
	}
	

	public function alta()
	{
		return view('orlants');
	}


public function email()
{
	return view('email');
}


/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

public function guardaemail(Request $request)
{
  $datos=$this->validate(request(),[
    'correo'=>'required']);
  $correo=$request['correo'];
  $enc=DB::select("SELECT id_usuario,correo FROM usuarios");
$ban=0;
  foreach($enc as $e){
  if($correo==$e->correo){
	$datos['dest']=$correo;
	$cad='abcdefghijklmnñopqrstuvwxyz1234567890';
	$datos['password']=substr(str_shuffle($cad),0,8);
	$pw_enc=$datos['password'];
	DB::select("UPDATE usuarios SET password='$pw_enc' WHERE id_usuario=$e->id_usuario");
	Mail::send('formulario.mensaje',['datos'=>$datos],
		function($m) use($datos){
		$m->to($datos['dest'])
		->subject('Seguridad de contraseña');
		$ban=1;
	});

	 echo "<script> alert('Correo Enviado')</script>";
return view('login');

  }

}
if ($ban==0) {
	 echo "<script> alert('Correo no encontrado')</script>";
return view('email');
}

}
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
	

	public function enviar_email()
{
	$datos['dest']='al221711322@gmail.com';
	$cad='abcdefghijklmnñopqrstuvwxyz1234';
	$datos['password']=substr(str_shuffle('cad'),0,8);
	Mail::send('formulario.mensaje',['datos'=>$datos],
		function($m) use($datos){
		$m->to($datos['dest'])
		->subject('Prueba2');
	});
	echo "se ha enviado";
}


 
	/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
	










	/////////////////////////////////////////////////////////////
//////////////////USUARIOS ARCHIVO///////////////////////////////////////////


 public function altausuarios2()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = usuarios::withTrashed()->orderBy('id_usuario','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idus=1;
	}
	else{
		$idus = $clavequesigue[0]->id_usuario+1;
	}
	$unidades = unidades::where('id_unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
	$trabajadores = trabajadores::where('Usuario','=','No')
		                      ->orderBy('nombre_tra','asc')
							  ->get();						  
      return view ("altausuarios2")
	  ->with('unidades',$unidades)
	  ->with('trabajadores',$trabajadores)
	  ->with('idus',$idus);
    }}
	public function guardausuario2(Request $request)
    {
		$id_usuario= $request->id_usuario;
		$clues=$request->clues;
        $correo = $request->correo;
		$area = $request->area;
        $user = $request->user;
		$password = $request->password;
		$id_unidad = $request->id_unidad;
		$id_trabajador = $request->id_trabajador;
		
        $this->validate($request,[
		 'clues'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'correo'=>['email'],
		 'password'=>['alpha_num'],
         'user'=>['alpha_num'],
		 'password'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'fotoperfil'=>'image|mimes:jpeg,jpg,png,gif'
	     ]);
         
     $file = $request->file('fotoperfil');
	 if($file!="")
	 {

	 $img = $file->getClientOriginalName();
	 $img2 = $img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
		 $img2 = "sinfoto.png";
	 }
	 
            $usuar = new usuarios;
			$usuar->id_usuario = $request->id_usuario;
			$usuar->clues = $request->clues;
			$usuar->correo = $request->correo;
			$usuar->area = $request->area;
			$usuar->user = $request->user;
			$usuar->password = $request->password;
			$usuar->fotoperfil = $img2;
			$usuar->id_unidad = $request->id_unidad;
			$usuar->id_trabajador = $request->id_trabajador;
			$usuar->save();
    
	$Usuario = $request->Usuario;;	
	$trabajador = trabajadores::find($id_trabajador);
	$trabajador->Usuario = $request->Usuario;
			$trabajador->save();
			
	return redirect()->route('principal2');
 
    }

	public function principal2()
	{
	if(Session::get('sesiontipo')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		
		    return view('datatables.dtusuario2');

	     }}
	
public function desactivau2($id_usuario)
	{
	usuarios::find($id_usuario)->delete();
	return redirect()->route('principal2');
	}
	public function restaurau2($id_usuario)
	{
usuarios::withTrashed()->where('id_usuario',$id_usuario)->restore();
return redirect()->route('principal2');
	}





	

	public function modificau2($id_usuario)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$usuarios= usuarios::where('id_usuario','=',$id_usuario)->get();
		$id_unidad = $usuarios[0]->id_unidad;
		$unidad = unidades::where('id_unidad','=',$id_unidad)->get();
		$todasdemas = unidades::where('id_unidad','!=',$id_unidad)
		                        ->orderBy('nom_unidad','asc')
								->get();
		$id_trabajador = $usuarios[0]->id_trabajador;
		$trabajador = trabajadores::where('id_trabajador','=',$id_trabajador)->get();
		$todasdemast = trabajadores::where('id_trabajador','!=',$id_trabajador)
		                        ->orderBy('nombre_tra','asc')
								->get();
		$area = $usuarios[0]->area;
		return view('modificausuarios2')
		->with('usuarios',$usuarios[0])
		->with('id_unidad',$id_unidad)
		->with('unidad',$unidad[0]->nom_unidad)
		->with('todasdemas',$todasdemas)
		->with('id_trabajador',$id_trabajador)
		->with('trabajador',$trabajador[0])
		->with('todasdemast',$todasdemast)

		->with('area',$area);
	}}
	
	public function modificausuario2(Request $request)
	{
		
		$id_usuario= $request->id_usuario;
		$clues= $request->clues;
        $correo = $request->correo;
		$area = $request->area;
        $user = $request->user;
		$password = $request->password;
		$id_unidad = $request->id_unidad;
		$id_trabajador = $request->id_trabajador;
        $this->validate($request,[
        	'clues'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'correo'=>['email'],
		 'password'=>['alpha_num'],
         'user'=>['alpha_num'],
		 'password'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'fotoperfil'=>'image|mimes:jpeg,jpg,png,gif'
	     ]);
         
		 
	 $file = $request->file('fotoperfil');
	 if($file!="")
	 {
////////////////////////////////////////////////////////////////////
	 	///////////////Quitar///////////////////////////////
	 	///////////////////////////////////////////////////////////
	 $img = $file->getClientOriginalName();
	 $img2 = $img;

	 ////////////////////////////////////////////////////////////////////
	 	///////////////////////////////////////////////////////////
	 	///////////////////////////////////////////////////////////
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	        $usuar = usuarios::find($id_usuario);
			$usuar->id_usuario = $request->id_usuario;
			$usuar->clues= $request->clues;
			$usuar->correo = $request->correo;
			$usuar->area = $request->area;
			$usuar->user = $request->user;
			$usuar->password = $request->password;
			if($file!="")
			{
			$usuar->fotoperfil = $img2;
			}
			$usuar->id_unidad = $request->id_unidad;
			$usuar->id_trabajador = $request->id_trabajador;
			$usuar->save();
	 ////return view ('modificausuario');

			///////////////////PASAR CODIGO///////////////////////////

			
    
    
     
     
      echo"<script type=\"text/javascript\">alert(' Cambios Guardados Satisfactoriamente.'); window.location='sistema_inicio';</script>";
 
       
   

			return view('datatables.sistema_inicio');


			/////////////////////////////////////////////
			/////////////////////////////////////////////

         
	}

	public function modu2()
	{
		return view ('modificausuario2');
	}
	
	/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
	
	
	
	
	
	
}
