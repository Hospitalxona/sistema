<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\unidades;
use App\trabajadores;
use App\consultas_urgencias;
class cconsultaurgencia extends Controller
{
 public function principalcu()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	

		    return view('datatables.consulta_de_urgencia');

		}}
	
	
	public function altaconsultau()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	$clavequesigue = consultas_urgencias::withTrashed()->orderBy('Id_ConsultaUrgencia','desc')
								->take(1)
								->get();			
	if(count($clavequesigue)==0)
	{
		$idcus=1;
	}
	else{
		$idcus = $clavequesigue[0]->Id_ConsultaUrgencia+1;
	}	
		$idt=Session::get('sesionidt');	
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();	
      return view ("ConsultadeUrgencia_Generar")
	  ->with('unidades',$unidades)
	   ->with('idcus',$idcus)
	  ->with('trabajadores',$trabajadores[0]); 
    }}	
	public function guardacu(Request $request)
    {
		$Id_ConsultaUrgencia= $request->Id_ConsultaUrgencia;
		$Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$Hora_Elaboracion= $request->Hora_Elaboracion;
		$Tipo_Interrogatorio= $request->Tipo_Interrogatorio;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edo_civil= $request->Edo_civil;
		$Genero= $request->Genero;
		$fechan= $request->fechan;
		$Ocupacion= $request->Ocupacion;
		$Lugar_trabajo= $request->Lugar_trabajo;
		$Procedencia= $request->Procedencia;
		$Lugar_accidente= $request->Lugar_accidente;
		$Nombre_Tutor= $request->Nombre_Tutor;
		$Parentesco_Tutor= $request->Parentesco_Tutor;
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
		$Antecedentes_RU= $request->Antecedentes_RU;
		$Padecimiento_A= $request->Padecimiento_A;
		$T_A= $request->T_A;
		$Temp= $request->Temp;
		$Frec_C= $request->Frec_C;
		$Frec_R= $request->Frec_R;
		$Peso= $request->Peso;
	    $Talla= $request->Talla;
	    $Exploracion_fisica= $request->Exploracion_fisica;
        $Resultados_lab= $request->Resultados_lab;
		$Diagnostico_pre= $request->Diagnostico_pre;
		$Tratamiento_realizado= $request->Tratamiento_realizado;
		$Urgencia_calificada= $request->Urgencia_calificada;
	    $Caso_Medico= $request->Caso_Medico;
		$Notificacion_ministerio= $request->Notificacion_ministerio;
		$Fila1= $request->Fila1;
		$Fila2= $request->Fila2;
		$Fila3= $request->Fila3;
		$Destino= $request->Destino;
		$Id_expediente= $request->Id_expediente;
		$Id_unidad= $request->Id_unidad;
		$Id_trabajador= $request->Id_trabajador;

        $cu = new consultas_urgencias;
		$cu->Id_ConsultaUrgencia= $request->Id_ConsultaUrgencia;
		$cu->Fecha_Elaboracion= $request->Fecha_Elaboracion;
		$cu->Hora_Elaboracion= $request->Hora_Elaboracion;
		$cu->Tipo_Interrogatorio= $request->Tipo_Interrogatorio;
		$cu->Nombre= $request->Nombre;
		$cu->Apellido_P= $request->Apellido_P;
		$cu->Apellido_M= $request->Apellido_M;
		$cu->Edo_civil= $request->Edo_civil;
		$cu->Genero= $request->Genero;
		$cu->fechan= $request->fechan;
		$cu->Ocupacion= $request->Ocupacion;
		$cu->Lugar_trabajo= $request->Lugar_trabajo;
		$cu->Procedencia= $request->Procedencia;
		$cu->Lugar_accidente= $request->Lugar_accidente;
		$cu->Nombre_Tutor= $request->Nombre_Tutor;
		$cu->Parentesco_Tutor= $request->Parentesco_Tutor;
		$cu->tvia= $request->tvia;
		$cu->via= $request->via;
		$cu->ta= $request->ta;
		$cu->na= $request->na;
		$cu->nint= $request->nint;
		$cu->n_ext= $request->n_ext;
		$cu->cp= $request->cp;
		$cu->loc= $request->loc;
		$cu->mun= $request->mun;
		$cu->edo= $request->edo;
		$cu->tel= $request->tel;
		$cu->Antecedentes_RU= $request->Antecedentes_RU;
		$cu->Padecimiento_A= $request->Padecimiento_A;
		$cu->T_A= $request->T_A;
		$cu->Temp= $request->Temp;
		$cu->Frec_C= $request->Frec_C;
		$cu->Frec_R= $request->Frec_R;
		$cu->Peso= $request->Peso;
	    $cu->Talla= $request->Talla;
	    $cu->Exploracion_fisica= $request->Exploracion_fisica;
        $cu->Resultados_lab= $request->Resultados_lab;
		$cu->Diagnostico_pre= $request->Diagnostico_pre;
		$cu->Tratamiento_realizado= $request->Tratamiento_realizado;
		$cu->Urgencia_calificada= $request->Urgencia_calificada;
	    $cu->Caso_Medico= $request->Caso_Medico;
		$cu->Notificacion_ministerio= $request->Notificacion_ministerio;
		$cu->Fila1= $request->Fila1;
		$cu->Fila2= $request->Fila2;
		$cu->Fila3= $request->Fila3;
		$cu->Destino= $request->Destino;
		$cu->Id_expediente= $request->Id_expediente;
		$cu->Id_unidad= $request->Id_unidad;
		$cu->Id_trabajador= $request->Id_trabajador;
		$cu->save();
	return redirect()->route('principalcu');
	}
	public function desactivacu($Id_ConsultaUrgencia)
	{
	consultas_urgencias::find($Id_ConsultaUrgencia)->delete();
	return redirect()->route('principalcu');
	}
	
	public function restauracu($Id_ConsultaUrgencia)
	{
consultas_urgencias::withTrashed()->where('Id_ConsultaUrgencia',$Id_ConsultaUrgencia)->restore();
return redirect()->route('principalcu');
	}
	public function eliminacu($Id_ConsultaUrgencia)
	{
consultas_urgencias::withTrashed()->where('Id_ConsultaUrgencia',$Id_ConsultaUrgencia)->forceDelete();
return redirect()->route('principalcu');
    }	
	
	public function revisacu($Id_ConsultaUrgencia)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$consultas_urgencias= consultas_urgencias::where('Id_ConsultaUrgencia','=',$Id_ConsultaUrgencia)->get();
		$idt=$consultas_urgencias[0]->Id_trabajador;
		$trabajadores= trabajadores::where('Id_trabajador','=',$idt)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
		return view('ConsultadeUrgencia_Revisar')
		->with('consultas_urgencias',$consultas_urgencias[0])
		->with('unidades',$unidades)
	    ->with('trabajadores',$trabajadores[0]);
	}}
}
