<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\citasce;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;

use DB;
use Session;
use App\unidades;
use App\citas;
use App\areas;
use App\consultorios;
use App\doctores;
use App\expedientes;
use App\recetas_medicas;
use App\trabajadores;
use Illuminate\Support\Facades\Mail;

class controladorexpedientes4 extends Controller
{
    public function altacitaconclickder($resultado)
        {    
            if(Session::get('sesionidu')=="")
        {
            Session::flash('error', 'Es necesario loguearse antes de continuar');

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


$res = DB::table('citas')
             ->where('id_cit', '=', $resultado)
             ->take(1)
             ->get();

/* redireccionar a una ruta 
return redirect()->route('altacitaceclickder4');     
*/

return view('citas.modificar_citas_conexpedientes_click_der4')
       ->with('unidades',$unidades)
       ->with('res', $res)
       ->with('doctores',$doctores)
       ->with('consultorios',$consultorios)
      ->with('idexs',$idexs);
    }}












    public function guardacitaconclickder(Request $request)
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
          echo "window.location = 'conexpedientes';";
          echo "</script>"; 


          /*echo "<h1>Hola mundo</h1>";
      

      
          return redirect()->route('conexpedientes');*/

    }





    public function showTable()
    {
        return Datatables::of(citasce::query())->make(true);
    }


    public function funcion8()
    {
    /* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/


/*
$query = mysqli_query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");

$query=query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");
*/

$user = Session::get('sesionname');

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
  ->where('id_cit', '=', '3')
  ->whereNull('deleted_at');
          
  return datatables::of($query)
    
    ->addColumn('btn', 'actions.actions_1')   
    ->rawColumns(['btn'])

    ->toJson();
    }
















    public function modificarcitaconclickder($resultado)
    {
    /* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/


/*
$query = mysqli_query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");

$query=query("SELECT id_cit AS id_cit, id_expediente AS id_expediente, fecha AS fecha, hora AS hora, area_med AS area_med, num_consul AS num_consul, doctor AS doctor, asistencia AS asistencia, nom_paciente AS nom_paciente, ap_paciente AS ap_paciente, am_paciente AS am_paciente FROM citas;");
*/

$user = Session::get('sesionname');

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
  ->where('id_cit', '=', '3')
  ->whereNull('deleted_at');
          
  return datatables::of($query)
    
    ->addColumn('btn', 'actions.actions_1')   
    ->rawColumns(['btn'])

    ->toJson();
    }



    public function funcion9($resultado)
        {    
            if(Session::get('sesionidu')=="")
        {
            Session::flash('error', 'Es necesario loguearse antes de continuar');

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


$res = DB::table('citas')
             ->where('id_cit', '=', $resultado)
             ->take(1)
             ->get();

/* redireccionar a una ruta 
return redirect()->route('altacitaceclickder4');     
*/

return view('citas.index')
       ->with('unidades',$unidades)
       ->with('res', $res)
       ->with('doctores',$doctores)
       ->with('consultorios',$consultorios)
      ->with('idexs',$idexs);
    }}













}
