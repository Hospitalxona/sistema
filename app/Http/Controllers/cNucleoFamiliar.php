<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Carbon\Carbon;
use App\trabajadores;
use App\expedientes;
use App\pacientes;
use App\historial_expedientes;
use App\areas;
use DB;
use App\unidades;
use App\citas;
use App\resultadosexp;
use Yajra\Datatables\Datatables;

use Illuminate\Validation\Rule;
use Validator;
use Session;

class cNucleoFamiliar extends Controller
{
    public function modificafamiliar($id_expediente)
	{
		
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			$expedientes= expedientes::where('id_expediente','=',$id_expediente)
			->withTrashed()
			->get();
		
		
			$id_paciente = $expedientes[0]->id_paciente;
			
			$pacientes= pacientes::where('id_paciente','=',$id_paciente)
			->get();
				
				return view('archivo.editNucleoFamiliar')
					->with('expedientes', $expedientes[0])
					->with('pacientes', $pacientes[0]);
		}		
		
	}

public function nuevofamiliar($id_expediente)
	{
		
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			$expedientes= expedientes::where('id_expediente','=',$id_expediente)
			->select('folio', 'id_unidad', 'id_paciente')
			->withTrashed()
			->get();
		
		
			$id_paciente = $expedientes[0]->id_paciente;
			
			$pacientes= pacientes::where('id_paciente','=',$id_paciente)			
			->get();
				
				return view('archivo.newNucleoFamiliar')
					->with('expedientes', $expedientes[0])
					->with('pacientes', $pacientes[0]);
		}		
		
	}

	
	public function registrafamiliar(Request $request){
		$regla = ['ap_paciente'=>'required',
                 'am_paciente'=>'required',
                 'nom_paciente'=>'required',
				 'curp'=>'required',
				 'parentesco'=>'required',
				'edad'=>'required',
				'fecha_nacimiento'=>'required'

];

        $valida = Validator::make($request->all(),$regla);
		
		 if ($valida->fails()) {
            return ['status' => false,
                    'errors' => $valida->messages()];
        }
		else{	

		
		
		$num_afiliacion=$request->num_afiliacion;
		
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$nom_paciente= $request->nom_paciente;
		$curp= $request->curp;

$edad= $request->edad;
$sexo= $request->sexo;
$fecha_nacimiento= $request->fecha_nacimiento;
$afiliacion_seguro= $request->afiliacion_seguro;
$nom_vialidad= $request->nom_vialidad;
$tipo_vialidad= $request->tipo_vialidad;
$num_int= $request->num_int;
$num_ext= $request->num_ext;
$nombre_asentamiento= $request->nombre_asentamiento;
$tipo_asentamiento= $request->tipo_asentamiento;
$cp= $request->cp;
$localidad= $request->localidad;
$telefono= $request->telefono;
$ExpedienteD='Si';
$id_municipio= $request->id_municipio;
$id_estado= $request->id_estado;

		
		
		$ubicacion='Archivo';
		$folio=$request->folio;
		$parentesco= $request->parentesco;
		$id_unidad=$request->id_unidad;
		
			//ALTA EN PACIENTES
		$pacientes=new pacientes;
		$pacientes->ap_paciente= $request->ap_paciente;
		$pacientes->am_paciente= $request->am_paciente;
		$pacientes->nom_paciente= $request->nom_paciente;
		$pacientes->curp= $request->curp;
		$pacientes->edad= $request->edad;
		$pacientes->sexo= $request->sexo;
		$pacientes->fecha_nacimiento= $request->fecha_nacimiento;
		$pacientes->afiliacion_seguro= $request->afiliacion_seguro;
		$pacientes->nom_vialidad= $request->nom_vialidad;
		$pacientes->tipo_vialidad= $request->tipo_vialidad;
		$pacientes->num_int= $request->num_int;
		$pacientes->num_ext= $request->num_ext;
		$pacientes->nombre_asentamiento= $request->nombre_asentamiento;
		$pacientes->tipo_asentamiento= $request->tipo_asentamiento;
		$pacientes->cp= $request->cp;
		$pacientes->localidad= $request->localidad;
		$pacientes->telefono= $request->telefono;
		$pacientes->ExpedienteD=$ExpedienteD;
		$pacientes->id_municipio= $request->id_municipio;
		$pacientes->id_estado= $request->id_estado;
		$pacientes->save();

$paci=pacientes::select('id_paciente')->take(1)->orderBy('id_paciente','desc')->first();		

//ALTA EN EXPEDIENTES	
	$expedientes=new expedientes;
		$expedientes->folio= $request->folio;
		$expedientes->ubicacion= $ubicacion;
		$expedientes->id_paciente= $paci->id_paciente;
		$expedientes->id_unidad= $request->id_unidad;
		$expedientes->parentesco= $request->parentesco;
		$expedientes->save();
		
		return redirect()->route('principalex');


		}
	}
	

	
	public function revisafamilia(Request $request){
		$regla = ['ap_paciente'=>'required',
                 'am_paciente'=>'required',
                 'nom_paciente'=>'required',
				 'curp'=>'required',
				 'parentesco'=>'required'

];

        $valida = Validator::make($request->all(),$regla);
		
		 if ($valida->fails()) {
            return ['status' => false,
                    'errors' => $valida->messages()];
        }
		else{
		
		$id_expediente=$request->id_expediente;
		$id_paciente=$request->id_paciente;
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$nom_paciente= $request->nom_paciente;
		$curp= $request->curp;
		$parentesco= $request->parentesco;
			
		 $pacientes = pacientes::findOrFail($id_paciente);
		$pacientes->ap_paciente= $request->ap_paciente;
		$pacientes->am_paciente= $request->am_paciente;
		$pacientes->nom_paciente= $request->nom_paciente;
		$pacientes->curp= $request->curp;
		$pacientes->save();

		
		$expedientes=expedientes::findOrFail($id_expediente);
		$expedientes->parentesco= $request->parentesco;
		$expedientes->save();
		
		return redirect()->route('principalex');


		}
	}
}
