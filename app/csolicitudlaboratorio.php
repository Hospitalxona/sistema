<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\solicitudes_laboratorios;
use App\trabajadores;
class csolicitudlaboratorio extends Controller
{
public function principalsl()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	

	
		return view('datatables.solicitudlaboratorio');
		
	}}
public function hojaII()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{		
		return view('SolicitudLaboratorioII');
	}}	
	
	public function altasolicitudeslaboratorios()
    {    
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
  $clavequesigue = solicitudes_laboratorios::withTrashed()->orderBy('Id_Solicitud','desc')
								->take(1)
								->get();			
	if(count($clavequesigue)==0)
	{
		$idsls=1;
	}
	else{
		$idsls = $clavequesigue[0]->Id_Solicitud+1;
	}		
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
	$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
$nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;							  
return view ("SolicitudLaboratorio_Generar")
 ->with('idsls',$idsls)
 ->with('nombretrabajador',$nombretrabajador)
 ->with('unidades',$unidades);
    }}	
	
	
	public function guardasl(Request $request)
    {

		$Id_Solicitud= $request->Id_Solicitud;
		$NoRecibo= $request->NoRecibo;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$NumeroA= $request->NumeroA;
		$Servicio= $request->Servicio;
		$Cama= $request->Cama;
		$Diagnostico= $request->Diagnostico;
		$Fecha_PC= $request->Fecha_PC;
		$Hematologia= $request->Hematologia;
		if($Hematologia=='')
		{
		$ListaH = ""; 	
		}
		else{
		$ListaH = ""; 
		foreach ($Hematologia as $valor) { 
    $ListaH = $ListaH.$valor; 
        } 	
		}
		
		$Anormalidades= $request->Anormalidades;
		
		
		$QuimicaS= $request->QuimicaS;
if($QuimicaS=='')
		{
		$ListaQS = ""; 	
		}
		else{
		$ListaQS = ""; 
		foreach ($QuimicaS as $valor) { 
    $ListaQS = $ListaQS.$valor; 
        } 	
		}
		$NombreQ= $request->NombreQ;
		$Perfil= $request->Perfil;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;
		$Id_expediente= $request->Id_expediente;
		
        $sl = new solicitudes_laboratorios;
		$sl->Id_Solicitud= $request->Id_Solicitud;
		$sl->NoRecibo= $request->NoRecibo;
		$sl->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$sl->Nombre= $request->Nombre;
		$sl->Apellido_P= $request->Apellido_P;
		$sl->Apellido_M= $request->Apellido_M;
		$sl->Edad= $request->Edad;
		$sl->Genero= $request->Genero;
		$sl->NumeroA= $request->NumeroA;
		$sl->Servicio= $request->Servicio;
		$sl->Cama= $request->Cama;
		$sl->Diagnostico= $request->Diagnostico;
		$sl->Fecha_PC= $request->Fecha_PC;
		$sl->Hematologia= $ListaH;
		$sl->Anormalidades= $request->Anormalidades;
		$sl->QuimicaS= $ListaQS;
		$sl->NombreQ= $request->NombreQ;
		$sl->Perfil= $request->Perfil;
		$sl->Id_unidad= $request->Id_unidad;
		$sl->Id_trabajador= $request->Id_trabajador;
		$sl->Id_expediente= $request->Id_expediente;
		$sl->save();
	return redirect()->route('principalsl');
	
	}
	
	public function desactivasl($Id_Solicitud)
	{
	solicitudes_laboratorios::find($Id_Solicitud)->delete();
	return redirect()->route('principalsl');
	}
	
	public function restaurasl($Id_Solicitud)
	{
solicitudes_laboratorios::withTrashed()->where('Id_Solicitud',$Id_Solicitud)->restore();
return redirect()->route('principalsl');
	}
	public function eliminasl($Id_Solicitud)
	{
solicitudes_laboratorios::withTrashed()->where('Id_Solicitud',$Id_Solicitud)->forceDelete();
return redirect()->route('principalsl');
    }

	public function revisasl($Id_Solicitud)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$solicitudes_laboratorios= solicitudes_laboratorios::where('Id_Solicitud','=',$Id_Solicitud)->get();
		$idt=$solicitudes_laboratorios[0]->Id_trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
			
		return view('SolicitudLaboratorio_Revisar')
		->with('solicitudes_laboratorios',$solicitudes_laboratorios[0])
		->with('unidades',$unidades)
	    ->with('nombretrabajador',$nombretrabajador);
	}}
}
