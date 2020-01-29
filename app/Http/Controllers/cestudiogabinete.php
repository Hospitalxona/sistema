<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\trabajadores;
use App\estudios_gabinetes;
class cestudiogabinete extends Controller
{
 	public function principaleg()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	


 		return view('datatables.estudio_gabinete');


		}}
public function altaestudiog()
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
	$clavequesigue = estudios_gabinetes::withTrashed()->orderBy('Id_EstudioGabinete','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idegs=1;
	}
	else{
		$idegs = $clavequesigue[0]->Id_EstudioGabinete+1;
	}		
	$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
						  
      return view ("EstudiodeGabinete_Generar")
	  ->with('unidades',$unidades)
	  ->with('trabajadores',$trabajadores[0])
	  ->with('idegs',$idegs);
    }}	
	public function guardaeg(Request $request)
    {
		$Id_EstudioGabinete= $request->Id_EstudioGabinete;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$De= $request->De;
		$Servicio= $request->Servicio;
		$Cama= $request->Cama;
		$Paciente= $request->Paciente;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$Datos_clinicos= $request->Datos_clinicos;
		$Diagnostico= $request->Diagnostico;
		$Estudios_solicitados= $request->Estudios_solicitados;
		$Fechapc= $request->Fechapc;
		$Observaciones= $request->Observaciones;
		$Placa= $request->Placa;
		$Clave= $request->Clave;
		$Interpretacion= $request->Interpretacion;
		$Fecha_Interpretacion= $request->Fecha_Interpretacion;
		$Observaciones2= $request->Observaciones2;
		$Id_unidad= $request->Id_unidad;
		$Id_expediente= $request->Id_expediente;
		$Id_trabajador= $request->Id_trabajador;

        $eg = new estudios_gabinetes;
		$eg->Id_EstudioGabinete= $request->Id_EstudioGabinete;
		$eg->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$eg->Hora_Elaboracion= $request->Hora_Elaboracion;
		$eg->De= $request->De;
		$eg->Servicio= $request->Servicio;
		$eg->Cama= $request->Cama;
		$eg->Paciente= $request->Paciente;
		$eg->Nombre= $request->Nombre;
		$eg->Apellido_P= $request->Apellido_P;
		$eg->Apellido_M= $request->Apellido_M;
		$eg->Edad= $request->Edad;
		$eg->Genero= $request->Genero;
		$eg->Datos_clinicos= $request->Datos_clinicos;
		$eg->Diagnostico= $request->Diagnostico;
		$eg->Estudios_solicitados= $request->Estudios_solicitados;
		$eg->Fechapc= $request->Fechapc;
		$eg->Observaciones= $request->Observaciones;
		$eg->Placa= $request->Placa;
		$eg->Clave= $request->Clave;
		$eg->Interpretacion= $request->Interpretacion;
		$eg->Fecha_Interpretacion= $request->Fecha_Interpretacion;
		$eg->Observaciones2= $request->Observaciones2;
		$eg->Id_unidad= $request->Id_unidad;
		$eg->Id_expediente= $request->Id_expediente;
		$eg->Id_trabajador= $request->Id_trabajador;
		$eg->save();
	return redirect()->route('principaleg');
	}
	public function desactivaeg($Id_EstudioGabinete)
	{
	estudios_gabinetes::find($Id_EstudioGabinete)->delete();
	return redirect()->route('principaleg');
	}
	
	public function restauraeg($Id_EstudioGabinete)
	{
estudios_gabinetes::withTrashed()->where('Id_EstudioGabinete',$Id_EstudioGabinete)->restore();
return redirect()->route('principaleg');
	}
	public function eliminaeg($Id_EstudioGabinete)
	{
estudios_gabinetes::withTrashed()->where('Id_EstudioGabinete',$Id_EstudioGabinete)->forceDelete();
return redirect()->route('principaleg');
    }	
	public function revisaeg($Id_EstudioGabinete)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$estudios_gabinetes= estudios_gabinetes::where('Id_EstudioGabinete','=',$Id_EstudioGabinete)->get();
		$idt=$estudios_gabinetes[0]->Id_Trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
		return view('EstudiodeGabinete_Revisar')
		->with('estudios_gabinetes',$estudios_gabinetes[0])
		->with('unidades',$unidades)
	    ->with('trabajadores',$trabajadores[0]);
	}}
}
