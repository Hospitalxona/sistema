<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\recetas_medicas;
use App\citas;
use App\doctores;
use App\consultorios;
use App\areas;
use App\expedientes;
use App\pacientes;
use App\trabajadores;
use App\cie10;
use Illuminate\Support\Facades\Mail;
use Validator;


use Illuminate\Support\Str;
use Carbon\Carbon;
use App\historial_expedientes;
use App\resultadosexp;
use Yajra\Datatables\Datatables;
use App\minventarios;
use App\tb_cie10;


class controladorexpedientes3 extends Controller
{
    public function funcion1()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$user = Session::get('sesionname');

		/*$mensaje = "El nombre del trabajador es.$user";
			echo "<script>";
			echo "alert('$mensaje');";  
			
			echo "</script>"; */
	      return view('citas.index3')

	     ->with('sesionname',$user);

		
	}}








	public function desactivarce3($id_cit)
	{
	citas::find($id_cit)->delete();
	return redirect()->route('conexpedientes3'); /*a la vista1*/
	}



	public function funcion3()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = citas::withTrashed()->orderBy('id_cit','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idexs=1;
	}
	else{
		$idexs = $clavequesigue[0]->id_cit+1;
	}

   $unidades = areas::orderBy('nombre_area','asc')
							  ->get();

	$doctores = doctores::orderBy('nom_doc','asc')
							  ->get();

$consultorios = consultorios::orderBy('num_consul','asc')
							  ->get();

$expedientes = expedientes::orderBy('id_expediente','asc')
							  ->get();
									  
      return view ("citas.altacitaconex3")
	   ->with('unidades',$unidades)
	   ->with('doctores',$doctores)
	   ->with('consultorios',$consultorios)
	  ->with('idexs',$idexs);
    }}









    public function funcion4(Request $request)
    {
		/*$id_cit= $request->id_cit;*/
        $id_expediente = $request->id_expediente;
		$fecha = $request->fecha;
		$hora = $request->hora;
		$area_med = $request->area_med;
		$num_consul = $request->num_consul;
		$doctor = $request->doctor;
		$asistencia = $request->asistencia;
		$nom_paciente = $request->nom_paciente;
		$ap_paciente = $request->ap_paciente;
		$am_paciente = $request->am_paciente;

            $expe = new citas;
            /*$expe->id_cit = $request->id_cit;*/
			$expe->id_expediente = $request->id_expediente;
			$expe->fecha = $request->fecha;
			$expe->hora = $request->hora;
			$expe->area_med = $request->area_med;
			$expe->num_consul = $request->num_consul;
			$expe->doctor = $request->doctor;
			$expe->asistencia = $request->asistencia;
			$expe->nom_paciente = $request->nom_paciente;
			$expe->ap_paciente = $request->ap_paciente;
			$expe->am_paciente = $request->am_paciente;
			$expe->save();
			
			


			$mensaje = "Los datos se insertarón correctamente";
			echo "<script>";
			echo "alert('$mensaje');";  
			echo "window.location = 'conexpedientes3';";
			echo "</script>"; 


			/*echo "<h1>Hola mundo</h1>";
			

			
			return redirect()->route('conexpedientes');*/

			}
			
			
		



			
	public function funcion5($id_cit)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		//$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
		//$ubicacion = $expedientes[0]->ubicacion;
		//$parentesco = $expedientes[0]->parentesco;
		
		$fa=DB::table('citas')
		/*->join('citas.id_cit')*/
		->where('citas.id_cit', '=', $id_cit)
		->select('citas.*')
		//toma el id //
		->take(1)
		->get(); 



$unidades = areas::orderBy('nombre_area','asc')
							  ->get();

$doctores = doctores::orderBy('nom_doc','asc')
							  ->get();

$consultorios = consultorios::orderBy('num_consul','asc')
							  ->get();

$expedientes = expedientes::orderBy('id_expediente','asc')
							  ->get();

								
	
		return view('citas.modificar_citas_conexpedientes3')
		//->with('expedientes',$expedientes[0])
		//->with('ubicacion',$ubicacion)
		//->with('parentesco',$parentesco)
		->with('fa',$fa)
		->with('unidades',$unidades)
	   	->with('doctores',$doctores)
	   	->with('consultorios',$consultorios)
	  	->with('expedientes',$expedientes);
		}

	}






	public function funcion6(Request $request)
	{
		$id_cit = $request->id_cit;
		$id_expediente = $request->id_expediente;
		$fecha = $request->fecha;
		$hora = $request->hora;
		$area_med = $request->area_med;
		$num_consul = $request->num_consul;
		$doctor = $request->doctor;
		$asistencia = $request->asistencia;
		$nom_paciente = $request->nom_paciente;
		
		
		
		
		//$mo = new recetas_medicas;
		
		$gu=citas::find($id_cit);


		$gu->id_cit = $request->id_cit;
		$gu->id_expediente = $request->id_expediente;
		$gu->fecha = $request->fecha;
		$gu->hora = $request->hora;
		$gu->area_med = $request->area_med;
		$gu->num_consul = $request->num_consul;
		$gu->doctor = $request->doctor;
		$gu->asistencia = $request->asistencia;
		$gu->nom_paciente = $request->nom_paciente;

		
		
		$gu->save();

		
		$mensaje = "Los datos se modificarón correctamente";
			echo "<script>";
			echo "alert('$mensaje');";  
			echo "window.location = 'conexpedientes3';";
			echo "</script>"; 		
		
		/*return redirect()->route('conexpedientes');*/	
	}





	public function funcion7(Request $request)
    {


    	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	
	$clavequesigue = citas::withTrashed()->orderBy('id_cit','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idexs=1;
	}
	else{
		$idexs = $clavequesigue[0]->id_cit+1;
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

            $resultado = $request->get('datos');
            $res = DB::table('expedientes')
                ->join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
                ->select('expedientes.*', 'pacientes.*')
                ->where('expedientes.id_expediente', '=', $resultado)
                ->take(1)
                ->get();

            $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();






$unidades = areas::orderBy('nombre_area','asc')
							  ->get();

	$doctores = doctores::orderBy('nom_doc','asc')
							  ->get();

$consultorios = consultorios::orderBy('num_consul','asc')
							  ->get();

$expedientes = expedientes::orderBy('id_expediente','asc')
							  ->get();









            return view('citas.result_busqueda_expediente3')

 ->with('idexs', $idexs)
 // ->with('tr', $trabajadores)
 ->with('tre', $tra)
 ->with('res', $res)
 ->with('cie', $cie)






 ->with('unidades',$unidades)
	   ->with('doctores',$doctores)
	   ->with('consultorios',$consultorios)
	  ->with('idexs',$idexs);






        }
    }








    public function funcion8()
    {
		/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/


/*
$query = mysqli_query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");

$query=query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");
*/

/*$user = Session::get('sesionname');*/

$query=citas::select(['id_cit AS id_cit',
	'id_expediente AS id_expediente', 
	'fecha AS fecha',
	'hora AS hora',
	'area_med AS area_med',
	'num_consul AS num_consul',
	'doctor AS doctor',
	'asistencia AS asistencia',
	'nom_paciente AS nom_paciente',
	'ap_paciente AS ap_paciente', 
	'am_paciente AS am_paciente'])
	
	/*->where('doctor', '=', $user)*/
	->whereNull('deleted_at');
					
	return datatables::of($query)
		
		->addColumn('btn', 'actions.actions_3')		
		->rawColumns(['btn'])

		->toJson();
    }


























	
 
}
