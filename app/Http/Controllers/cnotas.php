<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\notas;
use App\unidades;
use Session;
class cnotas extends Controller
{
public function principaln()
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
   			


   			 return view('datatables.nota_evaluacion');
	
	}}
public function altanotas()
    {    
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
	$clavequesigue = notas::withTrashed()->orderBy('Id_Notas','desc')
								->take(1)
								->get();
	if(count($clavequesigue)==0)
	{
		$idns=1;
	}
	else{
		$idns = $clavequesigue[0]->Id_Notas+1;
	}
	$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
						  
      return view ("NotasEvolucion_Generar")
	  ->with('unidades',$unidades)
	  ->with('idns',$idns);
    }}
	
	public function guardanota(Request $request)
    {
		$Id_Notas= $request->Id_Notas;
		$hoja= $request->hoja;
		$de= $request->de;
		$Nombre= $request->Nombre;
		$Apellido_P= $request->Apellido_P;
		$Apellido_M= $request->Apellido_M;
		$Edad= $request->Edad;
		$Genero= $request->Genero;
		$T_A= $request->T_A;
		$Temp= $request->Temp;
		$Frec_C= $request->Frec_C;
		$Frec_R= $request->Frec_R;
		$Peso= $request->Peso;
		$Talla= $request->Talla;
		$Fecha_Elaboracion1= $request->Fecha_Elaboracion1;
		$Hora_Elaboracion1= $request->Hora_Elaboracion1;
		$Nota1= $request->Nota1;
		$Fecha_Elaboracion2 = $request->Fecha_Elaboracion2;
$Hora_Elaboracion2 = $request->Hora_Elaboracion2;
			$Nota2 = $request->Nota2;
			$Fecha_Elaboracion3 = $request->Fecha_Elaboracion3;
			$Hora_Elaboracion3 = $request->Hora_Elaboracion3;
			$Nota3 = $request->Nota3;
			$Fecha_Elaboracion4 = $request->Fecha_Elaboracion4;
			$Hora_Elaboracion4 = $request->Hora_Elaboracion4;
			$Nota4 = $request->Nota4;
			$Fecha_Elaboracion5 = $request->Fecha_Elaboracion5;
			$Hora_Elaboracion5 = $request->Hora_Elaboracion5;
			$Nota5 = $request->Nota5;
			$Fecha_Elaboracion6 = $request->Fecha_Elaboracion6;
			$Hora_Elaboracion6 = $request->Hora_Elaboracion6;
			$Nota6 = $request->Nota6;
			$Fecha_Elaboracion7 = $request->Fecha_Elaboracion7;
			$Hora_Elaboracion7 = $request->Hora_Elaboracion7;
			$Nota7 = $request->Nota7;
			$Fecha_Elaboracion8 = $request->Fecha_Elaboracion8;
			$Hora_Elaboracion8 = $request->Hora_Elaboracion8;
			$Nota8 = $request->Nota8;
            $Fecha_Elaboracion9 = $request->Fecha_Elaboracion9;
			$Hora_Elaboracion9 = $request->Hora_Elaboracion9;
			$Nota9 = $request->Nota9;
			$Fecha_Elaboracion10 = $request->Fecha_Elaboracion10;
			$Hora_Elaboracion10 = $request->Hora_Elaboracion10;
			$Nota10 = $request->Nota10;
			$Fecha_Elaboracion11 = $request->Fecha_Elaboracion11;
			$Hora_Elaboracion11 = $request->Hora_Elaboracion11;
			$Nota11 = $request->Nota11;
			$Fecha_Elaboracion12 = $request->Fecha_Elaboracion12;
			$Hora_Elaboracion12 = $request->Hora_Elaboracion12;
			$Nota12 = $request->Nota12;
			$Fecha_Elaboracion13 = $request->Fecha_Elaboracion13;
			$Hora_Elaboracion13 = $request->Hora_Elaboracion13;
			$Nota13 = $request->Nota13;
			$Fecha_Elaboracion14 = $request->Fecha_Elaboracion14;
			$Hora_Elaboracion14 = $request->Hora_Elaboracion14;
			$Nota14 = $request->Nota14;
			$Fecha_Elaboracion15 = $request->Fecha_Elaboracion15;
			$Hora_Elaboracion15 = $request->Hora_Elaboracion15;
			$Nota15 = $request->Nota15;
			$Fecha_Elaboracion16 = $request->Fecha_Elaboracion16;
			$Hora_Elaboracion16 = $request->Hora_Elaboracion16;
			$Nota16 = $request->Nota16;
			$Fecha_Elaboracion17 = $request->Fecha_Elaboracion17;
			$Hora_Elaboracion17 = $request->Hora_Elaboracion17;
			$Nota17 = $request->Nota17;
			$Fecha_Elaboracion18 = $request->Fecha_Elaboracion18;
			$Hora_Elaboracion18 = $request->Hora_Elaboracion18;
			$Nota18 = $request->Nota18;
			$Fecha_Elaboracion19 = $request->Fecha_Elaboracion19;
			$Hora_Elaboracion19 = $request->Hora_Elaboracion19;
			$Nota19 = $request->Nota19;
			$Fecha_Elaboracion20 = $request->Fecha_Elaboracion20;
			$Hora_Elaboracion20 = $request->Hora_Elaboracion20;
			$Nota20 = $request->Nota20;
			$Fecha_Elaboracion21 = $request->Fecha_Elaboracion21;
			$Hora_Elaboracion21 = $request->Hora_Elaboracion21;
			$Nota21 = $request->Nota21;
			$Fecha_Elaboracion22 = $request->Fecha_Elaboracion22;
			$Hora_Elaboracion22 = $request->Hora_Elaboracion22;
			$Nota22 = $request->Nota22;
			$Fecha_Elaboracion23 = $request->Fecha_Elaboracion23;
			$Hora_Elaboracion23 = $request->Hora_Elaboracion23;
			$Nota23 = $request->Nota23;
			$Fecha_Elaboracion24 = $request->Fecha_Elaboracion24;
			$Hora_Elaboracion24 = $request->Hora_Elaboracion24;
			$Nota24 = $request->Nota24;
			$Fecha_Elaboracion25 = $request->Fecha_Elaboracion25;
			$Hora_Elaboracion25 = $request->Hora_Elaboracion25;
			$Nota25 = $request->Nota25;
			$Fecha_Elaboracion26 = $request->Fecha_Elaboracion26;
			$Hora_Elaboracion26 = $request->Hora_Elaboracion26;
			$Nota26 = $request->Nota26;
			$Fecha_Elaboracion27 = $request->Fecha_Elaboracion27;
			$Hora_Elaboracion27 = $request->Hora_Elaboracion27;
			$Nota27 = $request->Nota27;
			$Fecha_Elaboracion28 = $request->Fecha_Elaboracion28;
			$Hora_Elaboracion28 = $request->Hora_Elaboracion28;
			$Nota28 = $request->Nota28;
			$Fecha_Elaboracion29 = $request->Fecha_Elaboracion29;
			$Hora_Elaboracion29 = $request->Hora_Elaboracion29;
			$Nota29 = $request->Nota29;
			$Fecha_Elaboracion30 = $request->Fecha_Elaboracion30;
			$Hora_Elaboracion30 = $request->Hora_Elaboracion30;
			$Nota30 = $request->Nota30;
			$Fecha_Elaboracion31 = $request->Fecha_Elaboracion31;
			$Hora_Elaboracion31 = $request->Hora_Elaboracion31;
			$Nota31 = $request->Nota31;
			$Fecha_Elaboracion32 = $request->Fecha_Elaboracion32;
			$Hora_Elaboracion32 = $request->Hora_Elaboracion32;
			$Nota32 = $request->Nota32;
			$Fecha_Elaboracion33 = $request->Fecha_Elaboracion33;
			$Hora_Elaboracion33 = $request->Hora_Elaboracion33;
			$Nota33 = $request->Nota33;
			$Fecha_Elaboracion34 = $request->Fecha_Elaboracion34;
			$Hora_Elaboracion34 = $request->Hora_Elaboracion34;
			$Nota34 = $request->Nota34;
			$Fecha_Elaboracion35 = $request->Fecha_Elaboracion35;
			$Hora_Elaboracion35 = $request->Hora_Elaboracion35;
			$Nota35 = $request->Nota35;
			$Fecha_Elaboracion36 = $request->Fecha_Elaboracion36;
			$Hora_Elaboracion36 = $request->Hora_Elaboracion36;
			$Nota36 = $request->Nota36;
			$Fecha_Elaboracion37 = $request->Fecha_Elaboracion37;
			$Hora_Elaboracion37 = $request->Hora_Elaboracion37;
			$Nota37 = $request->Nota37;	
		$T_A2= $request->T_A2;
		$Temp2= $request->Temp2;
		$Frec_C2= $request->Frec_C2;
		$Frec_R2= $request->Frec_R2;
		$Peso2= $request->Peso2;
		$Talla2= $request->Talla2;
		$Id_unidad= $request->Id_unidad;
		$Id_expediente= $request->Id_expediente;

            $not = new notas;
			$not->Id_Notas = $request->Id_Notas;
			$not->hoja = $request->hoja;
			$not->de = $request->de;
			$not->Nombre = $request->Nombre;
			$not->Apellido_P = $request->Apellido_P;
			$not->Apellido_M = $request->Apellido_M;
			$not->Edad= $request->Edad;
		    $not->Genero= $request->Genero;
			$not->T_A = $request->T_A;
			$not->Temp = $request->Temp;
			$not->Frec_C = $request->Frec_C;
			$not->Frec_R = $request->Frec_R;
			$not->Peso = $request->Peso;
			$not->Talla = $request->Talla;
			$not->Fecha_Elaboracion1 = $request->Fecha_Elaboracion1;
			$not->Hora_Elaboracion1 = $request->Hora_Elaboracion1;
			$not->Nota1 = $request->Nota1;
			$not->Fecha_Elaboracion2 = $request->Fecha_Elaboracion2;
			$not->Hora_Elaboracion2 = $request->Hora_Elaboracion2;
			$not->Nota2 = $request->Nota2;
			$not->Fecha_Elaboracion3 = $request->Fecha_Elaboracion3;
			$not->Hora_Elaboracion3 = $request->Hora_Elaboracion3;
			$not->Nota3 = $request->Nota3;
			$not->Fecha_Elaboracion4 = $request->Fecha_Elaboracion4;
			$not->Hora_Elaboracion4 = $request->Hora_Elaboracion4;
			$not->Nota4 = $request->Nota4;
			$not->Fecha_Elaboracion5 = $request->Fecha_Elaboracion5;
			$not->Hora_Elaboracion5 = $request->Hora_Elaboracion5;
			$not->Nota5 = $request->Nota5;
			$not->Fecha_Elaboracion6 = $request->Fecha_Elaboracion6;
			$not->Hora_Elaboracion6 = $request->Hora_Elaboracion6;
			$not->Nota6 = $request->Nota6;
			$not->Fecha_Elaboracion7 = $request->Fecha_Elaboracion7;
			$not->Hora_Elaboracion7 = $request->Hora_Elaboracion7;
			$not->Nota7 = $request->Nota7;
			$not->Fecha_Elaboracion8 = $request->Fecha_Elaboracion8;
			$not->Hora_Elaboracion8 = $request->Hora_Elaboracion8;
			$not->Nota8 = $request->Nota8;
            $not->Fecha_Elaboracion9 = $request->Fecha_Elaboracion9;
			$not->Hora_Elaboracion9 = $request->Hora_Elaboracion9;
			$not->Nota9 = $request->Nota9;
			$not->Fecha_Elaboracion10 = $request->Fecha_Elaboracion10;
			$not->Hora_Elaboracion10 = $request->Hora_Elaboracion10;
			$not->Nota10 = $request->Nota10;
			$not->Fecha_Elaboracion11 = $request->Fecha_Elaboracion11;
			$not->Hora_Elaboracion11 = $request->Hora_Elaboracion11;
			$not->Nota11 = $request->Nota11;
			$not->Fecha_Elaboracion12 = $request->Fecha_Elaboracion12;
			$not->Hora_Elaboracion12 = $request->Hora_Elaboracion12;
			$not->Nota12 = $request->Nota12;
			$not->Fecha_Elaboracion13 = $request->Fecha_Elaboracion13;
			$not->Hora_Elaboracion13 = $request->Hora_Elaboracion13;
			$not->Nota13 = $request->Nota13;
			$not->Fecha_Elaboracion14 = $request->Fecha_Elaboracion14;
			$not->Hora_Elaboracion14 = $request->Hora_Elaboracion14;
			$not->Nota14 = $request->Nota14;
			$not->Fecha_Elaboracion15 = $request->Fecha_Elaboracion15;
			$not->Hora_Elaboracion15 = $request->Hora_Elaboracion15;
			$not->Nota15 = $request->Nota15;
			$not->Fecha_Elaboracion16 = $request->Fecha_Elaboracion16;
			$not->Hora_Elaboracion16 = $request->Hora_Elaboracion16;
			$not->Nota16 = $request->Nota16;
			$not->Fecha_Elaboracion17 = $request->Fecha_Elaboracion17;
			$not->Hora_Elaboracion17 = $request->Hora_Elaboracion17;
			$not->Nota17 = $request->Nota17;
			$not->Fecha_Elaboracion18 = $request->Fecha_Elaboracion18;
			$not->Hora_Elaboracion18 = $request->Hora_Elaboracion18;
			$not->Nota18 = $request->Nota18;
			$not->Fecha_Elaboracion19 = $request->Fecha_Elaboracion19;
			$not->Hora_Elaboracion19 = $request->Hora_Elaboracion19;
			$not->Nota19 = $request->Nota19;
			$not->Fecha_Elaboracion20 = $request->Fecha_Elaboracion20;
			$not->Hora_Elaboracion20 = $request->Hora_Elaboracion20;
			$not->Nota20 = $request->Nota20;
			$not->Fecha_Elaboracion21 = $request->Fecha_Elaboracion21;
			$not->Hora_Elaboracion21 = $request->Hora_Elaboracion21;
			$not->Nota21 = $request->Nota21;
			$not->Fecha_Elaboracion22 = $request->Fecha_Elaboracion22;
			$not->Hora_Elaboracion22 = $request->Hora_Elaboracion22;
			$not->Nota22 = $request->Nota22;
			$not->Fecha_Elaboracion23 = $request->Fecha_Elaboracion23;
			$not->Hora_Elaboracion23 = $request->Hora_Elaboracion23;
			$not->Nota23 = $request->Nota23;
			$not->Fecha_Elaboracion24 = $request->Fecha_Elaboracion24;
			$not->Hora_Elaboracion24 = $request->Hora_Elaboracion24;
			$not->Nota24 = $request->Nota24;
			$not->Fecha_Elaboracion25 = $request->Fecha_Elaboracion25;
			$not->Hora_Elaboracion25 = $request->Hora_Elaboracion25;
			$not->Nota25 = $request->Nota25;
			$not->Fecha_Elaboracion26 = $request->Fecha_Elaboracion26;
			$not->Hora_Elaboracion26 = $request->Hora_Elaboracion26;
			$not->Nota26 = $request->Nota26;
			$not->Fecha_Elaboracion27 = $request->Fecha_Elaboracion27;
			$not->Hora_Elaboracion27 = $request->Hora_Elaboracion27;
			$not->Nota27 = $request->Nota27;
			$not->Fecha_Elaboracion28 = $request->Fecha_Elaboracion28;
			$not->Hora_Elaboracion28 = $request->Hora_Elaboracion28;
			$not->Nota28 = $request->Nota28;
			$not->Fecha_Elaboracion29 = $request->Fecha_Elaboracion29;
			$not->Hora_Elaboracion29 = $request->Hora_Elaboracion29;
			$not->Nota29 = $request->Nota29;
			$not->Fecha_Elaboracion30 = $request->Fecha_Elaboracion30;
			$not->Hora_Elaboracion30 = $request->Hora_Elaboracion30;
			$not->Nota30 = $request->Nota30;
			$not->Fecha_Elaboracion31 = $request->Fecha_Elaboracion31;
			$not->Hora_Elaboracion31 = $request->Hora_Elaboracion31;
			$not->Nota31 = $request->Nota31;
			$not->Fecha_Elaboracion32 = $request->Fecha_Elaboracion32;
			$not->Hora_Elaboracion32 = $request->Hora_Elaboracion32;
			$not->Nota32 = $request->Nota32;
			$not->Fecha_Elaboracion33 = $request->Fecha_Elaboracion33;
			$not->Hora_Elaboracion33 = $request->Hora_Elaboracion33;
			$not->Nota33 = $request->Nota33;
			$not->Fecha_Elaboracion34 = $request->Fecha_Elaboracion34;
			$not->Hora_Elaboracion34 = $request->Hora_Elaboracion34;
			$not->Nota34 = $request->Nota34;
			$not->Fecha_Elaboracion35 = $request->Fecha_Elaboracion35;
			$not->Hora_Elaboracion35 = $request->Hora_Elaboracion35;
			$not->Nota35 = $request->Nota35;
			$not->Fecha_Elaboracion36 = $request->Fecha_Elaboracion36;
			$not->Hora_Elaboracion36 = $request->Hora_Elaboracion36;
			$not->Nota36 = $request->Nota36;
			$not->Fecha_Elaboracion37 = $request->Fecha_Elaboracion37;
			$not->Hora_Elaboracion37 = $request->Hora_Elaboracion37;
			$not->Nota37 = $request->Nota37;
			$not->T_A2 = $request->T_A2;
			$not->Temp2 = $request->Temp2;
			$not->Frec_C2 = $request->Frec_C2;
			$not->Frec_R2 = $request->Frec_R2;
			$not->Peso2 = $request->Peso2;
			$not->Talla2 = $request->Talla2;
			$not->Id_unidad = $request->Id_unidad;
			$not->Id_expediente = $request->Id_expediente;
			$not->save();
	return redirect()->route('principaln');
         
    }
public function desactivan($Id_Notas)
	{
	notas::find($Id_Notas)->delete();
	return redirect()->route('principaln');
	}
	
	public function restauran($Id_Notas)
	{
notas::withTrashed()->where('Id_Notas',$Id_Notas)->restore();
return redirect()->route('principaln');
	}
	public function eliminan($Id_Notas)
	{
notas::withTrashed()->where('Id_Notas',$Id_Notas)->forceDelete();
return redirect()->route('principaln');
    }	
	public function revisan($Id_Notas)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	
		$notas= notas::where('Id_Notas','=',$Id_Notas)->get();
		$unidades = unidades::where('Id_Unidad','=','1')
		                      ->orderBy('nom_unidad','asc')
							  ->get();
		return view('NotasEvolucion_Revisar')
		->with('notas',$notas[0])
		->with('unidades',$unidades);
	}}	
}
