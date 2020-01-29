<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\triages16_obstetricos;
use App\trabajadores;
class ctriageobstetrico16 extends Controller
{
public function principalto16()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		
		return view('datatables.triageobstetrico16');
		
	}}
	
	public function altatriageo16()
    {    
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$clavequesigue = triages16_obstetricos::withTrashed()->orderBy('Folio','desc')
								->take(1)
								->get();			
	if(count($clavequesigue)==0)
	{
		$idto16s=1;
	}
	else{
		$idto16s = $clavequesigue[0]->Folio+1;
	}			
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
	$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
$nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;							  
return view ("TriageObstetrico16_Generar")
 ->with('idto16s',$idto16s)
 ->with('nombretrabajador',$nombretrabajador)
 ->with('unidades',$unidades);
    }}	
	
	public function guardato16(Request $request)
    {
		$Folio= $request->Folio;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Fecha_n= $request->Fecha_n;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Hora_F= $request->Hora_F;
		$Codigo= $request->Codigo;
		$v1= $request->v1;
		$v2= $request->v2;
		$v3= $request->v3;
		$v4= $request->v4;
		$v5= $request->v5;
		$v6= $request->v6;
		$v7= $request->v7;
		$v8= $request->v8;
		$v9= $request->v9;
		$v10= $request->v10;
		$v11= $request->v11;
		$v12= $request->v12;
		$v13= $request->v13;
		$v14= $request->v14;
		$v15= $request->v15;
		$v16= $request->v16;
		$v17= $request->v17;
		$v18= $request->v18;
		$v19= $request->v19;
		$v20= $request->v20;
		$v21= $request->v21;
		$v22= $request->v22;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $to16 = new triages16_obstetricos;
		$to16->Folio= $request->Folio;
		$to16->Nombre= $request->Nombre;
		$to16->Apellido_P= $request->Apellido_P;
		$to16->Apellido_M= $request->Apellido_M;
		$to16->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$to16->Fecha_n= $request->Fecha_n;
		$to16->Hora_Elaboracion= $request->Hora_Elaboracion;
		$to16->Hora_F= $request->Hora_F;
		$to16->Codigo= $request->Codigo;
		$to16->v1= $request->v1;
		$to16->v2= $request->v2;
		$to16->v3= $request->v3;
		$to16->v4= $request->v4;
		$to16->v5= $request->v5;
		$to16->v6= $request->v6;
		$to16->v7= $request->v7;
		$to16->v8= $request->v8;
		$to16->v9= $request->v9;
		$to16->v10= $request->v10;
		$to16->v11= $request->v11;
		$to16->v12= $request->v12;
		$to16->v13= $request->v13;
		$to16->v14= $request->v14;
		$to16->v15= $request->v15;
		$to16->v16= $request->v16;
		$to16->v17= $request->v17;
		$to16->v18= $request->v18;
		$to16->v19= $request->v19;
		$to16->v20= $request->v20;
		$to16->v21= $request->v21;
		$to16->v22= $request->v22;
		$to16->Id_unidad= $request->Id_unidad;
		$to16->Id_trabajador= $request->Id_trabajador;
		$to16->save();
	return redirect()->route('principalto16');
	}
	
	public function desactivato16($Folio)
	{
	triages16_obstetricos::find($Folio)->delete();
	return redirect()->route('principalto16');
	}
	
	public function restaurato16($Folio)
	{
triages16_obstetricos::withTrashed()->where('Folio',$Folio)->restore();
return redirect()->route('principalto16');
	}
	public function eliminato16($Folio)
	{
triages16_obstetricos::withTrashed()->where('Folio',$Folio)->forceDelete();
return redirect()->route('principalto16');
    }	
	public function revisato16($Folio)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$triages16_obstetricos= triages16_obstetricos::where('Folio','=',$Folio)->get();
		$idt=$triages16_obstetricos[0]->Id_trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$idu=$triages16_obstetricos[0]->Id_unidad;
		$unidades = unidades::where('Id_Unidad','=',$idu)->get();
		$nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;	
		return view('TriageObstetrico16_Revisar')
		->with('triages16_obstetricos',$triages16_obstetricos[0])
		->with('unidades',$unidades)
	    ->with('nombretrabajador',$nombretrabajador);
	}}
	
	
}
