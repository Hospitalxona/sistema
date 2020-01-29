<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use App\expedientes;
use App\pacientes;
use App\unidades;
use App\historial_expedientes;
use App\citas;
class cexpedientes extends Controller
{
  public function principalex()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
        return view('archivo.busquedaexxpedientes');
		}}

	 public function principalexs()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
        return view('archivo.urgencias');
		}}
		
 /********************************************************************************* */
 public function altarecetas($resultado)
 {
	 if (Session::get('sesionidu') == '') {
		 Session::flash('error', 'Es necesario loguearse antes de
	 continuar');

		 return redirect()->route('index');
	 } else {
		 $clavequesigue = recetas_medicas::withTrashed()->orderBy('Id_receta', 'desc')
							 ->take(1)
							 ->get();
		 if (count($clavequesigue) == 0) {
			 $idrs = 1;
		 } else {
			 $idrs = $clavequesigue[0]->Id_receta + 1;
		 }
		 $idt = Session::get('sesionidt');
		 $trabajadores = trabajadores::where('id_trabajador', '=', $idt)->get();

		 $tra = DB::table('trabajadores')
			 ->join('unidades', 'trabajadores.id_unidad', '=', 'unidades.id_unidad')
			 ->select('unidades.*', 'trabajadores.*')
			 ->where('trabajadores.id_trabajador', '=', $idt)
			 ->take(1)
			 ->get();

		 //$unidades = unidades::where('Id_Unidad','=','1')
		 //   ->orderBy('nom_unidad','asc')
		 // ->get();

		 // $resultado = $request->get('datos');
		 $res = DB::table('expedientes')
			 ->join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
			 ->select('expedientes.*', 'pacientes.*')
			 ->where('expedientes.id_expediente', '=', $resultado)
			 ->take(1)
			 ->get();

		 $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();

		 return view('p2')

->with('idrs', $idrs)
// ->with('tr', $trabajadores)
->with('tre', $tra)
->with('res', $res)
->with('cie', $cie);
	 }
 }

	public function altaexpedientes()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = expedientes::withTrashed()->orderBy('id_expediente','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idexs=1;
	}
	else{
		$idexs = $clavequesigue[0]->id_expediente+1;
	}
	 $pacientes = pacientes::where('ExpedienteD','=','si')
	                          ->orderBy('nom_paciente','asc')
							  ->get();
   $unidades = unidades::orderBy('nom_unidad','asc')
							  ->get();								  
      return view ("altaexpedientes")
	  ->with('pacientes',$pacientes)
	   ->with('unidades',$unidades)
	  ->with('idexs',$idexs);
    }}
	
	public function guardaexpediente(Request $request)
    {
		$id_expediente= $request->id_expediente;
        $ubicacion = $request->ubicacion;
		$id_paciente = $request->id_paciente;
		$id_unidad = $request->id_unidad;

            $expe = new expedientes;
			$expe->id_expediente = $request->id_expediente;
			$expe->ubicacion = $request->ubicacion;
			$expe->id_paciente = $request->id_paciente;
			$expe->id_unidad = $request->id_unidad;
			$expe->save();
	$ExpedienteD = $request->ExpedienteD;	
	$paciente = pacientes::find($id_paciente);
	$paciente->ExpedienteD = $request->ExpedienteD;
			$paciente->save();
			
	return redirect()->route('principalex');
 
    }
	
	
	public function desactivaex($id_expediente)
	{
	expedientes::find($id_expediente)->delete();
	return redirect()->route('principalex');
	}
	public function restauraex($id_expediente)
	{
expedientes::withTrashed()->where('id_expediente',$id_expediente)->restore();
return redirect()->route('principalex');
	}
	public function eliminaex($id_expediente)
	{
$expedientes= expedientes::withTrashed()->where('id_expediente','=',$id_expediente)->get();
$id_paciente = $expedientes[0]->id_paciente;	
$pacientes = pacientes::find($id_paciente);
$pacientes->ExpedienteD = 'No';
$pacientes->save();		
expedientes::withTrashed()->where('id_expediente',$id_expediente)->forceDelete();
return redirect()->route('principalex');
    }
	
public function revisaex($id_expediente)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
	    $id_unidad = $expedientes[0]->id_unidad;
	$id_paciente = $expedientes[0]->id_paciente;
    $unidades= unidades::where('id_unidad','=',$id_unidad)->get();
		$pacientes= pacientes::where('id_paciente','=',$id_paciente)->get();
		
		return view('revisaexpediente')
		->with('expedientes',$expedientes[0])
		->with('unidades',$unidades[0])
		->with('pacientes',$pacientes[0]);
	}}
		

	public function ubicaciones($id_expediente)
	{
		
		
		$expedientes= expedientes::where('id_expediente','=',$id_expediente)
			->withTrashed()
			->get();
		
		
		$id_unidad = $expedientes[0]->id_unidad;
		$id_paciente = $expedientes[0]->id_paciente;
		
		$unidades= unidades::where('id_unidad','=',$id_unidad)
		->get();
		$pacientes= pacientes::where('id_paciente','=',$id_paciente)
		->get();
		
		$afili=$pacientes[0]->num_afiliacion;
		
		$ffamm=pacientes::join('expedientes', 'pacientes.id_paciente','=' ,'expedientes.id_paciente')
		->select('pacientes.ap_paciente', 'pacientes.am_paciente', 'pacientes.nom_paciente', 'pacientes.curp', 'expedientes.parentesco', 'pacientes.num_afiliacion','pacientes.id_paciente','expedientes.id_expediente')
		->where('pacientes.num_afiliacion', $afili)
		->whereNull('expedientes.deleted_at')
		->get();			
		
		$historial=historial_expedientes::join('expedientes', 'expedientes.id_expediente','=' ,'historial_expedientes.id_expediente')
				->join('trabajadores', 'trabajadores.id_trabajador', '=', 'historial_expedientes.id_trabajador')
				->join('areas', 'areas.id_area', '=', 'historial_expedientes.id_area')
				->select('historial_expedientes.id_expediente', 'trabajadores.ap_tra', 'trabajadores.am_tra','trabajadores.nombre_tra','areas.nombre_area', 'historial_expedientes.created_at')
				->where('expedientes.id_expediente', $id_expediente)
				->get();
		
		$his_citas=citas::orderBy('citas.id_cit', 'des')
					->where('citas.id_expediente', $id_expediente)
					->get();
		
		return view('archivo.historial_ubicaciones')
		->with('expedientes', $expedientes[0])
		->with('unidades', $unidades[0])
		->with('pacientes', $pacientes[0])
		->with('historial', $historial)
		->with('ffamm', $ffamm)
		->with('his_citas', $his_citas);
		
	}
	
	
	
	
}
