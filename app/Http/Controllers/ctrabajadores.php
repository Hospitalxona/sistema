<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\unidades;
use App\trabajadores;
use Session;
class ctrabajadores extends Controller
{
    public function principalt()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$trabajadores = DB::table('trabajadores')->paginate(4);

	      return view('datatables.trabajadores');


	   }}
	
	 public function altatrabajadores()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = trabajadores::withTrashed()->orderBy('id_trabajador','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idts=1;
	}
	else{
		$idts = $clavequesigue[0]->id_trabajador+1;
	}
	$unidades = unidades::where('id_unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();						  
      return view ("altatrabajadores")
	  ->with('unidades',$unidades)
	  ->with('idts',$idts);
    }}
	
	
	public function guardatrabajador(Request $request)
    {
		$id_trabajador= $request->id_trabajador;
		$nombre_tra= $request->nombre_tra;
		$ap_tra= $request->ap_tra;
		$am_tra= $request->am_tra;
		$sexo= $request->sexo;
		$cedula_profesional= $request->cedula_profesional;
		$turno = $request->turno;
		$dias_laborales = $request->dias_laborales;
		$hr_entrada = $request->hr_entrada;
		$hr_salida = $request->hr_salida;
		$especialidad= $request->especialidad;
		$escolaridad= $request->escolaridad;
		$telefono= $request->telefono;
		$email = $request->email;
        $rfc = $request->rfc;
		$area = $request->area;
		$Usuario = $request->Usuario;
		$id_unidad = $request->id_unidad;

        $this->validate($request,[
         'nombre_tra'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_tra'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_tra'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'cedula_profesional'=>['regex:/^[0-9]{8}$/'],
		 'turno'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'dias_laborales'=>['regex:/^[1-7]{1}$/'],
		 'especialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'escolaridad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'email'=>['email']
		 ]);
   
	 
        $tra = new trabajadores;
		$tra->id_trabajador= $request->id_trabajador;
		$tra->nombre_tra= $request->nombre_tra;
		$tra->ap_tra= $request->ap_tra;
		$tra->am_tra= $request->am_tra;
		$tra->sexo= $request->sexo;
		$tra->cedula_profesional= $request->cedula_profesional;
		$tra->turno = $request->turno;
		$tra->dias_laborales = $request->dias_laborales;
		$tra->hr_entrada = $request->hr_entrada;
		$tra->hr_salida = $request->hr_salida;
		$tra->especialidad= $request->especialidad;
		$tra->escolaridad= $request->escolaridad;
		$tra->telefono= $request->telefono;
		$tra->email = $request->email;
        $tra->rfc = $request->rfc;
		$tra->area = $request->area;
		$tra->Usuario = $request->Usuario;
		$tra->id_unidad = $request->id_unidad;
		$tra->save();
	return redirect()->route('principalt');
         
    }
	public function desactivat($id_trabajador)
	{
	trabajadores::find($id_trabajador)->delete();
	return redirect()->route('principalt');
	}
	public function restaurat($id_trabajador)
	{
trabajadores::withTrashed()->where('id_trabajador',$id_trabajador)->restore();
return redirect()->route('principalt');
	}
	public function eliminat($id_trabajador)
	{
trabajadores::withTrashed()->where('id_trabajador',$id_trabajador)->forceDelete();
return redirect()->route('principalt');
    }
	public function modificat($id_trabajador)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$trabajadores= trabajadores::where('id_trabajador','=',$id_trabajador)->get();
		$id_unidad = $trabajadores[0]->id_unidad;
		$unidad = unidades::where('id_unidad','=',$id_unidad)->get();
		$todasdemas = unidades::where('id_unidad','!=',$id_unidad)
		                        ->orderBy('nom_unidad','asc')
								->get();
		$area = $trabajadores[0]->area;
		return view('modificatrabajadores')
		->with('trabajadores',$trabajadores[0])
		->with('id_unidad',$id_unidad)
		->with('unidad',$unidad[0]->nom_unidad)
		->with('todasdemas',$todasdemas)
		->with('area',$area);
	}}
	public function modificatrabajador(Request $request)
	{
		
		$id_trabajador= $request->id_trabajador;
		$nombre_tra= $request->nombre_tra;
		$ap_tra= $request->ap_tra;
		$am_tra= $request->am_tra;
		$sexo= $request->sexo;
		$cedula_profesional= $request->cedula_profesional;
		$turno = $request->turno;
		$dias_laborales = $request->dias_laborales;
		$hr_entrada = $request->hr_entrada;
		$hr_salida = $request->hr_salida;
		$especialidad= $request->especialidad;
		$escolaridad= $request->escolaridad;
		$telefono= $request->telefono;
		$email = $request->email;
        $rfc = $request->rfc;
		$area = $request->area;
		$id_unidad = $request->id_unidad;
      
	   $this->validate($request,[
         'nombre_tra'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_tra'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_tra'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'cedula_profesional'=>['regex:/^[0-9]{8}$/'],
		 'turno'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'dias_laborales'=>['regex:/^[1-7]{1}$/'],
		 'especialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'escolaridad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'email'=>['email']
		 ]);
   
	    $tra = trabajadores::find($id_trabajador);
		$tra->id_trabajador= $request->id_trabajador;
		$tra->nombre_tra= $request->nombre_tra;
		$tra->ap_tra= $request->ap_tra;
		$tra->am_tra= $request->am_tra;
		$tra->sexo= $request->sexo;
		$tra->cedula_profesional= $request->cedula_profesional;
		$tra->turno = $request->turno;
		$tra->dias_laborales = $request->dias_laborales;
		$tra->hr_entrada = $request->hr_entrada;
		$tra->hr_salida = $request->hr_salida;
		$tra->especialidad= $request->especialidad;
		$tra->escolaridad= $request->escolaridad;
		$tra->telefono= $request->telefono;
		$tra->email = $request->email;
        $tra->rfc = $request->rfc;
		$tra->area = $request->area;
		$tra->id_unidad = $request->id_unidad;
		$tra->save();
	return redirect()->route('principalt');
	}
	
}