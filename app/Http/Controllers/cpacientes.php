<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\estados;
use App\municipios;
use App\pacientes;
use Session;
class cpacientes extends Controller
{
 public function principalp()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	

	return view('datatables.pacientes');
	
	}}
	
	public function altapacientes()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = pacientes::withTrashed()->orderBy('id_paciente','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idps=1;
	}
	else{
		$idps = $clavequesigue[0]->id_paciente+1;
	}
	$municipios = municipios::where('id_estado','=','11')
	                          ->orderBy('nombre_municipio','asc')
							  ->get();		
   $estados = estados::orderBy('nombre','asc')
							  ->get();								  
      return view ("altapacientes")
	  ->with('municipios',$municipios)
	  ->with('estados',$estados)
	  ->with('idps',$idps);
    }}
public function guardapaciente(Request $request)
    {
		$id_paciente= $request->id_paciente;
		$nom_paciente= $request->nom_paciente;
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$curp= $request->curp;
		$edad = $request->edad;
		$fecha_nacimiento = $request->fecha_nacimiento;
		$sexo = $request->sexo;
		$afiliacion_seguro = $request->afiliacion_seguro;
		$num_afiliacion= $request->num_afiliacion;
		$nom_vialidad= $request->nom_vialidad;
		$tipo_vialidad= $request->tipo_vialidad;
		$num_int = $request->num_int;
        $num_ext = $request->num_ext;
		$nombre_asentamiento = $request->nombre_asentamiento;
		$tipo_asentamiento= $request->tipo_asentamiento;
		$cp= $request->cp;
		$localidad= $request->localidad;
		$telefono= $request->telefono;
		$ExpedienteD= $request->ExpedienteD;
		$id_estado= $request->id_estado;
		$id_municipio = $request->id_municipio;

        $this->validate($request,[
         'nom_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'am_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'curp'=>['regex:/^[A-Z,0-9]{18}$/'],
		'edad'=>'required|integer|max:120',
		'afiliacion_seguro'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'num_afiliacion'=>'required|integer',
		'nom_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'tipo_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'num_int'=>'integer',
		'num_ext'=>'required|integer',
		'nombre_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'tipo_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'cp'=>['regex:/^[0-9]{5}$/'],
		'localidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'telefono'=>['regex:/^[0-9]{10}$/']
		 ]);
   
	 
        $pac = new pacientes;
		$pac->id_paciente= $request->id_paciente;
		$pac->nom_paciente= $request->nom_paciente;
		$pac->ap_paciente= $request->ap_paciente;
		$pac->am_paciente= $request->am_paciente;
		$pac->curp= $request->curp;
		$pac->edad = $request->edad;
		$pac->fecha_nacimiento = $request->fecha_nacimiento;
		$pac->sexo = $request->sexo;
		$pac->afiliacion_seguro = $request->afiliacion_seguro;
		$pac->num_afiliacion= $request->num_afiliacion;
		$pac->nom_vialidad= $request->nom_vialidad;
		$pac->tipo_vialidad= $request->tipo_vialidad;
		$pac->num_int = $request->num_int;
        $pac->num_ext = $request->num_ext;
		$pac->nombre_asentamiento = $request->nombre_asentamiento;
		$pac->tipo_asentamiento= $request->tipo_asentamiento;
		$pac->cp= $request->cp;
		$pac->localidad= $request->localidad;
		$pac->telefono= $request->telefono;
		$pac->ExpedienteD= $request->ExpedienteD;
		$pac->id_estado= $request->id_estado;
		$pac->id_municipio = $request->id_municipio;
		$pac->save();
	return redirect()->route('principalp');
         
    }
    public function desactivap($id_paciente)
	{
	pacientes::find($id_paciente)->delete();
	return redirect()->route('principalp');
	}
	public function restaurap($id_paciente)
	{
pacientes::withTrashed()->where('id_paciente',$id_paciente)->restore();
return redirect()->route('principalp');
	}
	public function eliminap($id_paciente)
	{
pacientes::withTrashed()->where('id_paciente',$id_paciente)->forceDelete();
return redirect()->route('principalp');
    }
	
	public function modificap($id_paciente)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$pacientes= pacientes::where('id_paciente','=',$id_paciente)->get();
		$id_estado = $pacientes[0]->id_estado;
		$id_municipio = $pacientes[0]->id_municipio;
		$estado = estados::where('id_estado','=',$id_estado)->get();
		$municipio = municipios::where('id_municipio','=',$id_municipio)->get();
		
		$todasdemase = estados::where('id_estado','!=',$id_estado)
		                        ->orderBy('nombre','asc')
								->get();
	    $todasdemasm = municipios::where('id_municipio','!=',$id_municipio)
		                        ->orderBy('nombre_municipio','asc')
								->get();
		return view('modificapacientes')
		->with('pacientes',$pacientes[0])
		->with('id_estado',$id_estado)
		->with('estado',$estado[0]->nombre)
		->with('todasdemase',$todasdemase)
		->with('id_municipio',$id_municipio)
		->with('municipio',$municipio[0]->nombre_municipio)
		->with('todasdemasm',$todasdemasm);
	}}
	public function modificapaciente(Request $request)
	{
		
		$id_paciente= $request->id_paciente;
		$nom_paciente= $request->nom_paciente;
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$curp= $request->curp;
		$edad = $request->edad;
		$fecha_nacimiento = $request->fecha_nacimiento;
		$sexo = $request->sexo;
		$afiliacion_seguro = $request->afiliacion_seguro;
		$num_afiliacion= $request->num_afiliacion;
		$nom_vialidad= $request->nom_vialidad;
		$tipo_vialidad= $request->tipo_vialidad;
		$num_int = $request->num_int;
        $num_ext = $request->num_ext;
		$nombre_asentamiento = $request->nombre_asentamiento;
		$tipo_asentamiento= $request->tipo_asentamiento;
		$cp= $request->cp;
		$localidad= $request->localidad;
		$telefono= $request->telefono;
		$id_estado= $request->id_estado;
		$id_municipio = $request->id_municipio;
      
	  $this->validate($request,[
         'nom_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'am_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'curp'=>['regex:/^[A-Z,0-9]{18}$/'],
		'edad'=>'required|integer|max:120',
		'afiliacion_seguro'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'num_afiliacion'=>'required|integer',
		'nom_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'tipo_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'num_int'=>'integer',
		'num_ext'=>'required|integer',
		'nombre_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'tipo_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'cp'=>['regex:/^[0-9]{5}$/'],
		'localidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		'telefono'=>['regex:/^[0-9]{10}$/']
		 ]);
   
	    $pac = pacientes::find($id_paciente);
	    $pac->id_paciente= $request->id_paciente;
		$pac->nom_paciente= $request->nom_paciente;
		$pac->ap_paciente= $request->ap_paciente;
		$pac->am_paciente= $request->am_paciente;
		$pac->curp= $request->curp;
		$pac->edad = $request->edad;
		$pac->fecha_nacimiento = $request->fecha_nacimiento;
		$pac->sexo = $request->sexo;
		$pac->afiliacion_seguro = $request->afiliacion_seguro;
		$pac->num_afiliacion= $request->num_afiliacion;
		$pac->nom_vialidad= $request->nom_vialidad;
		$pac->tipo_vialidad= $request->tipo_vialidad;
		$pac->num_int = $request->num_int;
        $pac->num_ext = $request->num_ext;
		$pac->nombre_asentamiento = $request->nombre_asentamiento;
		$pac->tipo_asentamiento= $request->tipo_asentamiento;
		$pac->cp= $request->cp;
		$pac->localidad= $request->localidad;
		$pac->telefono= $request->telefono;
		$pac->id_estado= $request->id_estado;
		$pac->id_municipio = $request->id_municipio;
		$pac->save();
	return redirect()->route('principalp');
	}
	
}
