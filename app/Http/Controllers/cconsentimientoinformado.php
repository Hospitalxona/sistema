<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\trabajadores;
use App\consentimientos_informados;
class cconsentimientoinformado extends Controller
{
     public function principalci()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{

		       return view('datatables.consentimientoinformado');
	    
	    }}


	public function altaconsentimientosinformados()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$clavequesigue = consentimientos_informados::withTrashed()->orderBy('Id_ConsentimientoInformado','desc')
								->take(1)
								->get();			
	if(count($clavequesigue)==0)
	{
		$idcis=1;
	}
	else{
		$idcis = $clavequesigue[0]->Id_ConsentimientoInformado+1;
	}		
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();	
		$nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;					  

	return view ("ConsentimientoInformado_Generar")
	->with('unidades',$unidades)
	->with('idcis',$idcis)
	->with('nombretrabajador',$nombretrabajador); 
    }}	
	
	public function guardaci(Request $request)
    {
		$Id_ConsentimientoInformado= $request->Id_ConsentimientoInformado;
		$Lugar= $request->Lugar;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$Ocupacion= $request->Ocupacion;
		$Edo_Civil= $request->Edo_Civil;
		$Calle= $request->Calle;
		$nint= $request->nint;
		$n_ext= $request->n_ext;
		$Colonia= $request->Colonia;
		$Localidad= $request->Localidad;
		$Municipio= $request->Municipio;
		$Estado= $request->Estado;
		$Servicio= $request->Servicio;
		$Linea1= $request->Linea1;
		$Linea2= $request->Linea2;
		$Linea3= $request->Linea3;
		$Linea4= $request->Linea4;
		$Linea5= $request->Linea5;
		$Linea6= $request->Linea6;
		$Linea7= $request->Linea7;
		$Linea8= $request->Linea8;
		$Linea9= $request->Linea9;
		$Linea10= $request->Linea10;
		$Linea11= $request->Linea11;
		$Linea12= $request->Linea12;
		$Testigo1= $request->Testigo1;
		$Testigo2= $request->Testigo2;
		$Id_expediente= $request->Id_expediente;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $ci = new consentimientos_informados;
		$ci->Id_ConsentimientoInformado= $request->Id_ConsentimientoInformado;
		$ci->Lugar= $request->Lugar;
		$ci->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$ci->Hora_Elaboracion= $request->Hora_Elaboracion;
		$ci->Nombre= $request->Nombre;
		$ci->Apellido_P= $request->Apellido_P;
		$ci->Apellido_M= $request->Apellido_M;
		$ci->Edad= $request->Edad;
		$ci->Genero= $request->Genero;
		$ci->Ocupacion= $request->Ocupacion;
		$ci->Edo_Civil= $request->Edo_Civil;
		$ci->Calle= $request->Calle;
		$ci->nint= $request->nint;
		$ci->n_ext= $request->n_ext;
		$ci->Colonia= $request->Colonia;
		$ci->Localidad= $request->Localidad;
		$ci->Municipio= $request->Municipio;
		$ci->Estado= $request->Estado;
		$ci->Servicio= $request->Servicio;
		$ci->Linea1= $request->Linea1;
		$ci->Linea2= $request->Linea2;
		$ci->Linea3= $request->Linea3;
		$ci->Linea4= $request->Linea4;
		$ci->Linea5= $request->Linea5;
		$ci->Linea6= $request->Linea6;
		$ci->Linea7= $request->Linea7;
		$ci->Linea8= $request->Linea8;
		$ci->Linea9= $request->Linea9;
		$ci->Linea10= $request->Linea10;
		$ci->Linea11= $request->Linea11;
		$ci->Linea12= $request->Linea12;
		$ci->Testigo1= $request->Testigo1;
		$ci->Testigo2= $request->Testigo2;
		$ci->Id_expediente= $request->Id_expediente;
		$ci->Id_unidad= $request->Id_unidad;
		$ci->Id_trabajador= $request->Id_trabajador;
		$ci->save();
	return redirect()->route('principalci');
	}

public function desactivaci($Id_ConsentimientoInformado)
	{
	consentimientos_informados::find($Id_ConsentimientoInformado)->delete();
	return redirect()->route('principalci');
	}
	
	public function restauraci($Id_ConsentimientoInformado)
	{
consentimientos_informados::withTrashed()->where('Id_ConsentimientoInformado',$Id_ConsentimientoInformado)->restore();
return redirect()->route('principalci');
	}
	public function eliminaci($Id_ConsentimientoInformado)
	{
consentimientos_informados::withTrashed()->where('Id_ConsentimientoInformado',$Id_ConsentimientoInformado)->forceDelete();
return redirect()->route('principalci');
    }	
	public function revisaci($Id_ConsentimientoInformado)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$consentimientos_informados= consentimientos_informados::where('Id_ConsentimientoInformado','=',$Id_ConsentimientoInformado)->get();
		$idt=$consentimientos_informados[0]->Id_trabajador;
		$idu=$consentimientos_informados[0]->Id_unidad;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=',$idu)
		                      ->orderBy('nom_unidad','asc')
							  ->get();
       $nombretrabajador=$trabajadores[0]->ap_tra.' '.$trabajadores[0]->am_tra.' '.$trabajadores[0]->nombre_tra;
		return view('ConsentimientoInformado_Revisar')
		->with('consentimientos_informados',$consentimientos_informados[0])
		->with('unidades',$unidades)
	    ->with('nombretrabajador',$nombretrabajador);
	}}
	
}
