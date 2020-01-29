<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\citas;
use App\expedientes;
use App\consultorios;
use App\doctores;
use DB;
use Session;

class ccitas extends Controller
{
    public function agencitas($id_expediente)
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
			$idc=1;
		}
		else
		{
			$idc = $clavequesigue[0]->id_cit+1;
		}
		$consultorio= consultorios::select('num_consul')
        ->get();
        $doctor= doctores::select('nom_doc','ap_doc','am_doc')
        ->get();
		$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
      	return view ("archivo.altacitas")
	  		->with('idc',$idc)
			->with('consultorio',$consultorio)
	  		->with('doctor',$doctor)
	  		->with('expedientes',$expedientes[0]);
	}}

	public function guardacita(Request $request)
	{
		$id_cit=$request->id_cit;
		$id_expediente=$request->id_expediente;
		$fecha=$request->fecha;
		$hora=$request->hora;
		$area_med=$request->area_med;
		$num_consul=$request->num_consul;
		$doctor=$request->doctor;

		$cit = new citas;
		$cit->id_cit = $request->id_cit;
		$cit->id_expediente = $request->id_expediente;
		$cit->fecha = $request->fecha;
		$cit->hora = $request->hora;
		$cit->area_med = $request->area_med;
		$cit->num_consul = $request->num_consul;
		$cit->doctor = $request->doctor;
		$cit -> save();
	    return redirect()->route('principalex');
	}

	public function buscacita()
	{
		
		$fechas= citas::select('fecha')->get();

		return view('archivo.busquedacitas')
		->with('fechas',$fechas);
	}

	public function resultadobusqueda(Request $request)
	{
		$resul=citas::join('expedientes','citas.id_expediente','=', 'expedientes.id_expediente')
		->join('pacientes','expedientes.id_paciente','=', 'pacientes.id_paciente')
		->select('citas.id_cit','pacientes.nom_paciente','expedientes.id_expediente','citas.fecha','citas.hora','citas.area_med','citas.num_consul','citas.doctor')
		->orderBy('citas.id_cit')
		->get();
		return view('archivo.resulbusqcitas')
		->with('resul',$resul);
	}
}
