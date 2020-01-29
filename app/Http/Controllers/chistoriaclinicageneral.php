<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\historias_clinicas;
use App\unidades;
use App\trabajadores;
use Session;
class chistoriaclinicageneral extends Controller
{
 public function principalh()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			
             return view('datatables.historiacli');
	
	}}
	public function altahistoriac()
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
	$clavequesigue = historias_clinicas::withTrashed()->orderBy('Id_HistoriaClinica','desc')
								->take(1)
								->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
				
	if(count($clavequesigue)==0)
	{
		$idhs=1;
	}
	else{
		$idhs = $clavequesigue[0]->Id_HistoriaClinica+1;
	}
			  
      return view ("HistorialClinicoGeneral_Generar")
	  ->with('unidades',$unidades)
	  ->with('idhs',$idhs)
	  ->with('trabajadores',$trabajadores[0]);
    }}
	public function guardahc(Request $request)
    {
		$Id_HistoriaClinica= $request->Id_HistoriaClinica;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Tipo_Interrogatorio= $request->Tipo_Interrogatorio;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$fechan= $request->fechan;
		$Ocupacion= $request->Ocupacion;
		$tvia= $request->tvia;
		$via= $request->via;
		$ta= $request->ta;
		$na= $request->na;
		$nint= $request->nint;
		$n_ext= $request->n_ext;
		$cp= $request->cp;
		$loc= $request->loc;
		$mun= $request->mun;
		$edo= $request->edo;
		$tel= $request->tel;
		$Nombre_Tutor= $request->Nombre_Tutor;
		$Parentesco_Tutor= $request->Parentesco_Tutor;
		$Telefono_Tutor= $request->Telefono_Tutor;
		$Antecedentes_H= $request->Antecedentes_H;
		$Antecedentes_PnoP= $request->Antecedentes_PnoP;
		$Antecedentes_PP= $request->Antecedentes_PP;
		$Antecedentes_G= $request->Antecedentes_G;
		$Padecimiento_Actual= $request->Padecimiento_Actual;
		$Cardiovascular= $request->Cardiovascular;
		$Respiratorio= $request->Respiratorio;
		$Gastrointestinal= $request->Gastrointestinal;
		$Geniuritario= $request->Geniuritario;
		$Hematico_Linfatico= $request->Hematico_Linfatico;
		$Endocrino= $request->Endocrino;
		$Nervioso= $request->Nervioso;
		$Musculoesqueletico= $request->Musculoesqueletico;
		$Piel_Mucosas_Anexos= $request->Piel_Mucosas_Anexos;
		$T_A= $request->T_A;
		$Temp= $request->Temp;
		$Frec_C= $request->Frec_C;
		$Frec_R= $request->Frec_R;
		$Peso= $request->Peso;
		$Talla= $request->Talla;
		$Habitus= $request->Habitus;
		$Cabeza= $request->Cabeza;
		$Cuello= $request->Cuello;
		$Torax= $request->Torax;
		$Abdomen= $request->Abdomen;
		$Genitales= $request->Genitales;
		$Extremidades= $request->Extremidades;
		$Piel= $request->Piel;
		$Resultados_Previos= $request->Resultados_Previos;
		$Problemas_Clinicos= $request->Problemas_Clinicos;
		$Tx_Farmacologico= $request->Tx_Farmacologico;
		$Terapeutica_Empleada= $request->Terapeutica_Empleada;
		$Terapeutica_Actual= $request->Terapeutica_Actual;
		$Pronostico= $request->Pronostico;
		$Id_expediente= $request->Id_expediente;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $hc = new historias_clinicas;
		$hc->Id_HistoriaClinica= $request->Id_HistoriaClinica;
		$hc->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$hc->Hora_Elaboracion= $request->Hora_Elaboracion;
		$hc->Tipo_Interrogatorio= $request->Tipo_Interrogatorio;
		$hc->Nombre= $request->Nombre;
		$hc->Apellido_P= $request->Apellido_P;
		$hc->Apellido_M= $request->Apellido_M;
		$hc->Edad= $request->Edad;
		$hc->Genero= $request->Genero;
		$hc->fechan= $request->fechan;
		$hc->Ocupacion= $request->Ocupacion;
		$hc->tvia= $request->tvia;
		$hc->via= $request->via;
		$hc->ta= $request->ta;
		$hc->na= $request->na;
		$hc->nint= $request->nint;
		$hc->n_ext= $request->n_ext;
		$hc->cp= $request->cp;
		$hc->loc= $request->loc;
		$hc->mun= $request->mun;
		$hc->edo= $request->edo;
		$hc->tel= $request->tel;
		$hc->Nombre_Tutor= $request->Nombre_Tutor;
		$hc->Parentesco_Tutor= $request->Parentesco_Tutor;
		$hc->Telefono_Tutor= $request->Telefono_Tutor;
		$hc->Antecedentes_H= $request->Antecedentes_H;
		$hc->Antecedentes_PnoP= $request->Antecedentes_PnoP;
		$hc->Antecedentes_PP= $request->Antecedentes_PP;
		$hc->Antecedentes_G= $request->Antecedentes_G;
		$hc->Padecimiento_Actual= $request->Padecimiento_Actual;
		$hc->Cardiovascular= $request->Cardiovascular;
		$hc->Respiratorio= $request->Respiratorio;
		$hc->Gastrointestinal= $request->Gastrointestinal;
		$hc->Geniuritario= $request->Geniuritario;
		$hc->Hematico_Linfatico= $request->Hematico_Linfatico;
		$hc->Endocrino= $request->Endocrino;
		$hc->Nervioso= $request->Nervioso;
		$hc->Musculoesqueletico= $request->Musculoesqueletico;
		$hc->Piel_Mucosas_Anexos= $request->Piel_Mucosas_Anexos;
		$hc->T_A= $request->T_A;
		$hc->Temp= $request->Temp;
		$hc->Frec_C= $request->Frec_C;
		$hc->Frec_R= $request->Frec_R;
		$hc->Peso= $request->Peso;
		$hc->Talla= $request->Talla;
		$hc->Habitus= $request->Habitus;
		$hc->Cabeza= $request->Cabeza;
		$hc->Cuello= $request->Cuello;
		$hc->Torax= $request->Torax;
		$hc->Abdomen= $request->Abdomen;
		$hc->Genitales= $request->Genitales;
		$hc->Extremidades= $request->Extremidades;
		$hc->Piel= $request->Piel;
		$hc->Resultados_Previos= $request->Resultados_Previos;
		$hc->Problemas_Clinicos= $request->Problemas_Clinicos;
		$hc->Tx_Farmacologico= $request->Tx_Farmacologico;
		$hc->Terapeutica_Empleada= $request->Terapeutica_Empleada;
		$hc->Terapeutica_Actual= $request->Terapeutica_Actual;
		$hc->Pronostico= $request->Pronostico;
		$hc->Id_expediente= $request->Id_expediente;
		$hc->Id_unidad= $request->Id_unidad;
		$hc->Id_trabajador= $request->Id_trabajador;
		$hc->save();
	return redirect()->route('principalh');
	}
	public function desactivahc($Id_HistoriaClinica)
	{
	historias_clinicas::find($Id_HistoriaClinica)->delete();
	return redirect()->route('principalh');
	}
	
	public function restaurahc($Id_HistoriaClinica)
	{
historias_clinicas::withTrashed()->where('Id_HistoriaClinica',$Id_HistoriaClinica)->restore();
return redirect()->route('principalh');
	}
	public function eliminahc($Id_HistoriaClinica)
	{
historias_clinicas::withTrashed()->where('Id_HistoriaClinica',$Id_HistoriaClinica)->forceDelete();
return redirect()->route('principalh');
    }	
	public function revisahc($Id_HistoriaClinica)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$historias_clinicas= historias_clinicas::where('Id_HistoriaClinica','=',$Id_HistoriaClinica)->get();		
	    $idt=$historias_clinicas[0]->Id_trabajador;
	    $trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();	
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
		return view('HistorialClinicoGeneral_Revisar')
		->with('historias_clinicas',$historias_clinicas[0])
		->with('unidades',$unidades)
	    ->with('trabajadores',$trabajadores[0]);
	}}
	
	//Busquedas	
	public function browserhc(Request $request)
	{
	$buscar = $request->buscar;
	
	$consulta = historias_clinicas::where('Id_HistoriaClinica',"like","%".$buscar."%")
	 ->orwhere('Nombre', "like", "%".$buscar."%")
	 ->orwhere('Apellido_P', "like", "%".$buscar."%")
	 ->orwhere('Apellido_M', "like", "%".$buscar."%")
	 ->orwhere('Fecha_Elaboracion', "like", "%".$buscar."%")
	 ->get();

		
	return view ('resultbrowserch')->with('consulta',$consulta);
	}	
}
