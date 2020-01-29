<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\trabajadores;
use App\hojas_triages;
class chojatriage extends Controller
{
public function principalht()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	

		    return view('datatables.hoja_triage');
		
	    }}
	
	public function altahojastriage()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$clavequesigue = hojas_triages::withTrashed()->orderBy('Folio','desc')
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
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
      return view ("HojadeTriage_Generar")
	   ->with('unidades',$unidades)
	   ->with('trabajadores',$trabajadores[0])
	    ->with('idts',$idts); 
    }}	
	
	public function guardaht(Request $request)
    {

		$Folio= $request->Folio;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$Frec_C= $request->Frec_C;
		$Frec_R= $request->Frec_R;
		$T_A= $request->T_A;
		$Temp= $request->Temp;
		
		$Antecedentes= $request->Antecedentes;
		if($Antecedentes=='')
		{
		$ListaA = ""; 	
		}
		else{
		$ListaA = ""; 
		foreach ($Antecedentes as $valor) { 
    $ListaA = $ListaA.$valor; 
        } 	
		}
		
		$Otro= $request->Otro;
		
		
		$Urgencia_I= $request->Urgencia_I;
if($Urgencia_I=='')
		{
		$ListaUI = ""; 	
		}
		else{
		$ListaUI = ""; 
		foreach ($Urgencia_I as $valor) { 
    $ListaUI = $ListaUI.$valor; 
        } 	
		}
		
		
		$Urgencia_C= $request->Urgencia_C;
		if($Urgencia_C=='')
		{
		$ListaUC = ""; 	
		}
		else{
		$ListaUC = ""; 
		foreach ($Urgencia_C as $valor) { 
    $ListaUC = $ListaUC.$valor; 
        } 	
		}
		
		$Urgencia_S= $request->Urgencia_S;
		if($Urgencia_S=='')
		{
		$ListaUS = ""; 	
		}
		else{
		$ListaUS = ""; 
		foreach ($Urgencia_S as $valor) { 
    $ListaUS = $ListaUS.$valor; 
        } 	
		}
		
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $ht = new hojas_triages;
		$ht->Folio= $request->Folio;
		$ht->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$ht->Hora_Elaboracion= $request->Hora_Elaboracion;
		$ht->Nombre= $request->Nombre;
		$ht->Apellido_P= $request->Apellido_P;
		$ht->Apellido_M= $request->Apellido_M;
		$ht->Edad= $request->Edad;
		$ht->Genero= $request->Genero;
		$ht->Frec_C= $request->Frec_C;
		$ht->Frec_R= $request->Frec_R;
		$ht->T_A= $request->T_A;
		$ht->Temp= $request->Temp;
		$ht->Antecedentes= $ListaA;
		$ht->Otro= $request->Otro;
		$ht->Urgencia_I= $ListaUI;
		$ht->Urgencia_C= $ListaUC;
		$ht->Urgencia_S= $ListaUS;
		$ht->Id_unidad= $request->Id_unidad;
		$ht->Id_trabajador= $request->Id_trabajador;
		$ht->save();
	return redirect()->route('principalht');
	
	}
		public function desactivaht($Folio)
	{
	hojas_triages::find($Folio)->delete();
	return redirect()->route('principalht');
	}
	
	public function restauraht($Folio)
	{
hojas_triages::withTrashed()->where('Folio',$Folio)->restore();
return redirect()->route('principalht');
	}
	public function eliminaht($Folio)
	{
hojas_triages::withTrashed()->where('Folio',$Folio)->forceDelete();
return redirect()->route('principalht');
    }

	public function revisaht($Folio)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$hojas_triages= hojas_triages::where('Folio','=',$Folio)->get();
		$idt=$hojas_triages[0]->Id_trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
			
		return view('HojadeTriage_Revisar')
		->with('hojas_triages',$hojas_triages[0])
		->with('unidades',$unidades)
	    ->with('trabajadores',$trabajadores[0]);
	}}

	
}
