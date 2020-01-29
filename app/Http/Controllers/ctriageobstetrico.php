<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\triages_obstetricos;
use App\trabajadores;
class ctriageobstetrico extends Controller
{
public function principalto()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	

			    return view('datatables.triage_obstetrico');
 
	    }}
	
	public function altatriageo()
    {    
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$clavequesigue = triages_obstetricos::withTrashed()->orderBy('Folio','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idts=1;
	}
	else{
		$idts = $clavequesigue[0]->Folio+1;
	}		
	$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
return view ("TriageObstetrico_Generar")
 ->with('trabajadores',$trabajadores[0])
 ->with('unidades',$unidades)
 ->with('idts',$idts);
    }}	
	public function guardato(Request $request)
    {
		$Folio= $request->Folio;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$T_A= $request->T_A;
		$Frec_C= $request->Frec_C;
		$Frec_R= $request->Frec_R;
		$Temp= $request->Temp;
		$EdoC= $request->EdoC;
		$HemorragiaT= $request->HemorragiaT;
		$CrisisC= $request->CrisisC;
		$SintomasV= $request->SintomasV;
		$Dolor= $request->Dolor;
		$SalidaL= $request->SalidaL;
		$ActividadU= $request->ActividadU;
		$MovimientosF= $request->MovimientosF;
		$EdadG= $request->EdadG;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $to = new triages_obstetricos;
		$to->Folio= $request->Folio;
		$to->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$to->Hora_Elaboracion= $request->Hora_Elaboracion;
		$to->Nombre= $request->Nombre;
		$to->Apellido_P= $request->Apellido_P;
		$to->Apellido_M= $request->Apellido_M;
		$to->Edad= $request->Edad;
		$to->Genero= $request->Genero;
		$to->T_A= $request->T_A;
		$to->Frec_C= $request->Frec_C;
		$to->Frec_R= $request->Frec_R;
		$to->Temp= $request->Temp;
		$to->EdoC= $request->EdoC;
		$to->HemorragiaT= $request->HemorragiaT;
		$to->CrisisC= $request->CrisisC;
		$to->SintomasV= $request->SintomasV;
		$to->Dolor= $request->Dolor;
		$to->SalidaL= $request->SalidaL;
		$to->ActividadU= $request->ActividadU;
		$to->MovimientosF= $request->MovimientosF;
		$to->EdadG= $request->EdadG;
		$to->Id_unidad= $request->Id_unidad;
		$to->Id_trabajador= $request->Id_trabajador;
		$to->save();
	return redirect()->route('principalto');
	}
	
	public function desactivato($Folio)
	{
	triages_obstetricos::find($Folio)->delete();
	return redirect()->route('principalto');
	}
	
	public function restaurato($Folio)
	{
triages_obstetricos::withTrashed()->where('Folio',$Folio)->restore();
return redirect()->route('principalto');
	}
	public function eliminato($Folio)
	{
triages_obstetricos::withTrashed()->where('Folio',$Folio)->forceDelete();
return redirect()->route('principalto');
    }	
	public function revisato($Folio)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$triages_obstetricos= triages_obstetricos::where('Folio','=',$Folio)->get();
		$idt=$triages_obstetricos[0]->Id_trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
		return view('TriageObstetrico_Revisar')
		->with('triages_obstetricos',$triages_obstetricos[0])
		->with('unidades',$unidades)
	    ->with('trabajadores',$trabajadores[0]);
	}}
	
	
	
	
	
}
