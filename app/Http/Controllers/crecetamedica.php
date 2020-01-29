<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\unidades;
use App\recetas_medicas;
use App\trabajadores;
use Illuminate\Support\Facades\Mail;

class crecetamedica extends Controller
{
    public function guardamedicamento(Request $request)
    {
        $newmedicamento = $request->input("newmedicamento");
        $codigo = $request->input("codigo");

        return  DB::select('call insertaMedicamento(?,?,?,?,?,?,?)',
        array(null,
        $codigo,
        $newmedicamento,
        "0",
        "2019-07-06 11:00:00",
        "2019-07-06 11:00:00",
        null
        ));
    }
    public function guardaenfermedad(Request $request)
    {
        $newEnfermedad = $request->input("newEnfermedad");
        $codigoE = $request->input("codigoE");
        return  DB::select('call insertaEnfermedad(?,?,?)',
        array(null,
        $codigoE,
        $newEnfermedad
        ));
    }

    public function principalrm(){
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{	  
		  return view('archivo.busquedareceta');
		}
	}
    
    //////////////////////////*poblcion abierta*/////////////////////////////////////
    public function principalpoblacion()
    {
        return view('datatables.recetapoblacion');
    }

    ///////////////////////////Dany/////////////////////////////////
    public function principalrmf()
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de continuar');

            return redirect()->route('index');
        } else {
            return view('datatables.recetas_medicafarm');
        }
    }

    ///////////////////////////Fin Dany/////////////////////////////////
    public function altarecetasmedicas(Request $request)
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de
		continuar');

            return redirect()->route('index');
        } else {
            $clavequesigue = recetas_medicas::withTrashed()->orderBy('Id_receta', 'desc')
                                ->take(1)
                                ->get();
            if (count($clavequesigue) == 0) {
                $idrs = 1;
            } else {
                $idrs = $clavequesigue[0]->Id_receta + 1;
            }
            $idt = Session::get('sesionidt');
            $trabajadores = trabajadores::where('id_trabajador', '=', $idt)->get();

            $tra = DB::table('trabajadores')
                ->join('unidades', 'trabajadores.id_unidad', '=', 'unidades.id_unidad')
                ->select('unidades.*', 'trabajadores.*')
                ->where('trabajadores.id_trabajador', '=', $idt)
                ->take(1)
                ->get();

            //$unidades = unidades::where('Id_Unidad','=','1')
            //   ->orderBy('nom_unidad','asc')
            // ->get();

            $resultado = $request->get('datos');
            $res = DB::table('expedientes')
                ->join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
                ->select('expedientes.*', 'pacientes.*')
                // ->where('expedientes.id_expediente', '=', $resultado)
                ->where('expedientes.expediente', '=', $resultado)
                ->take(1)
                ->get();

            $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();
            $areas = DB::table('areas')->select('id_area', 'nombre_area')->get();
        
            return view('p')

 ->with('idrs', $idrs)
 // ->with('tr', $trabajadores)
 ->with('areas', $areas)
 ->with('tre', $tra)
 ->with('res', $res)
 ->with('cie', $cie);
        }
    }
 /********************************************************************************* */
 public function altarecetas($resultado)
 {
     if (Session::get('sesionidu') == '') {
         Session::flash('error', 'Es necesario loguearse antes de
     continuar');

         return redirect()->route('index');
     } else {
         $clavequesigue = recetas_medicas::withTrashed()->orderBy('Id_receta', 'desc')
                             ->take(1)
                             ->get();
         if (count($clavequesigue) == 0) {
             $idrs = 1;
         } else {
             $idrs = $clavequesigue[0]->Id_receta + 1;
         }
         $idt = Session::get('sesionidt');
         $trabajadores = trabajadores::where('id_trabajador', '=', $idt)->get();

         $tra = DB::table('trabajadores')
             ->join('unidades', 'trabajadores.id_unidad', '=', 'unidades.id_unidad')
             ->select('unidades.*', 'trabajadores.*')
             ->where('trabajadores.id_trabajador', '=', $idt)
             ->take(1)
             ->get();

         //$unidades = unidades::where('Id_Unidad','=','1')
         //   ->orderBy('nom_unidad','asc')
         // ->get();

         // $resultado = $request->get('datos');
         $res = DB::table('expedientes')
             ->join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
             ->select('expedientes.*', 'pacientes.*')
             ->where('expedientes.id_expediente', '=', $resultado)
             ->take(1)
             ->get();

         $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();
         $areas = DB::table('areas')->select('id_area', 'nombre_area')->get();
        
         return view('p2')

->with('idrs', $idrs)
// ->with('tr', $trabajadores)
->with('areas', $areas)
->with('tre', $tra)
->with('res', $res)
->with('cie', $cie);
     }
 }
    public function altarecetasmedicaspa()
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de
		continuar');

            return redirect()->route('index');
        } else {
            $clavequesigue = recetas_medicas::withTrashed()->orderBy('Id_receta', 'desc')
                                ->take(1)
                                ->get();
            if (count($clavequesigue) == 0) {
                $idrs = 1;
            } else {
                $idrs = $clavequesigue[0]->Id_receta + 1;
            }
            $idt = Session::get('sesionidt');
            $trabajadores = trabajadores::where('id_trabajador', '=', $idt)->get();

            $tra = DB::table('trabajadores')
                ->join('unidades', 'trabajadores.id_unidad', '=', 'unidades.id_unidad')
                ->select('unidades.*', 'trabajadores.*')
                ->where('trabajadores.id_trabajador', '=', $idt)
                ->take(1)
                ->get();

            $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();

            return view('pa')

 ->with('idrs', $idrs)
 ->with('tre', $tra)
 ->with('cie', $cie);
        }
    }

    public function guardarm(Request $request)
    {
        //$Id_receta= $request->Id_receta;
      
        $tipoA=Session::get('sesiontipo');

        $Folio = $request->Folio;
        $tipo = $request->tipo;
        // $Area = $request->Area;
        $Clave_servicio = $request->Clave_servicio;
        $Nom_servicio = $request->Nom_servicio;

        $No_licencia = $request->No_licencia;
        $Cobertura = $request->Cobertura;
        $Fecha_Elaboracion = $request->Fecha_Elaboracion;
        $No_Afiliacion = $request->No_Afiliacion;
        $Nombre = $request->Nombre;

        $Apellido_P = $request->Apellido_P;
        $Apellido_M = $request->Apellido_M;
        $Clave_M = $request->Clave_M;
        $Nombre_M = $request->Nombre_M;
        $Clave_Diagnostico = $request->Clave_Diagnostico;

        $Dosis = $request->Dosis;
        $Duracion = $request->Duracion;
        $Cantidad_solicitada = $request->Cantidad_solicitada;
        $Cantidad_surtida = $request->Cantidad_surtida;
        $Edad = $request->Edad;

        $Genero = $request->Genero;
        $Clave_M2 = $request->Clave_M2;
        $Nombre_M2 = $request->Nombre_M2;
        $Clave_Diagnostico2 = $request->Clave_Diagnostico2;
        $Dosis2 = $request->Dosis2;

        $Duracion2 = $request->Duracion2;
        $Cantidad_solicitada2 = $request->Cantidad_solicitada2;
        $Cantidad_surtida2 = $request->Cantidad_surtida2;
        $Clave_M3 = $request->Clave_M3;
        $Nombre_M3 = $request->Nombre_M3;

        $Clave_Diagnostico3 = $request->Clave_Diagnostico3;
        $Dosis3 = $request->Dosis3;
        $Duracion3 = $request->Duracion3;
        $Cantidad_solicitada3 = $request->Cantidad_solicitada3;
        $Cantidad_surtida3 = $request->Cantidad_surtida3;

        $Ent_cajas = $request->Ent_cajas;
        $Recibi_cajas = $request->Recibi_cajas;
        $Fecha_recibido = $request->Fecha_recibido;
        $Id_expediente = $request->Id_expediente;
        $Id_unidad = $request->Id_unidad;

        $idt = Session::get('sesionidt');
        $Id_trabajador = $idt;

        $validatedData = $request->validate([
        'Cantidad_solicitada' => 'required',
    ]);

        $data = DB::table('minventarios')
        ->where('medicamento', '=', $Nombre_M)
        ->select('minventarios.*')
        ->get();
        foreach ($data as $value) {
            $id = $value->id;
            $cdg_medica = $value->medi_mat;
            $medic = $value->medicamento;
            $N_exis1 = $value->existencia;

            $N_exisF = $N_exis1 - $Cantidad_solicitada;

            $data = DB::table('minventarios')
            ->where('id', $id)
            ->update(['existencia' => $N_exisF]);
        }

        $dataCE = DB::table('minventarios')
         ->where('medicamento', '=', $Nombre_M)
         ->select('minventarios.*')
         ->get();
        foreach ($dataCE as $valueCE) {
            $id = $valueCE->id;
            $cdg_medicaCE = $valueCE->medi_mat;
            $medicCE = $valueCE->medicamento;
            $N_exis1CE = $valueCE->existencia;

    
        }


     
        // echo $Area;
        DB::select('call insertaReceta(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        array(null,
        $Folio,
        $tipo,
        $tipoA,
        $Clave_servicio,
        $Nom_servicio,
        $No_licencia,
        $Cobertura,
        $Fecha_Elaboracion,
        $No_Afiliacion,
        $Nombre,
        $Apellido_P,
        $Apellido_M,
        $Clave_M ,
        $Nombre_M,
        $Clave_Diagnostico,
        $Dosis,
        $Duracion,
        $Cantidad_solicitada,
        $Cantidad_surtida,
        "MOTI",
        $Edad,
        $Genero,
        $Clave_M2,
        $Nombre_M2 ,
        $Clave_Diagnostico2,
        $Dosis2,
        $Duracion2,
        $Cantidad_solicitada2,
        $Cantidad_surtida2,
        "motivo2",
        $Clave_M3,
        $Nombre_M3,
        $Clave_Diagnostico3,
        $Dosis3,
        $Duracion3,
        $Cantidad_solicitada3,
        $Cantidad_surtida3,
        "motivo3",
        $Ent_cajas,
        $Recibi_cajas,
        $Fecha_recibido,
        $Id_expediente,
        $Id_unidad,
        $Id_trabajador,
        "remember_token",
        "2018-12-26 15:47:27",
        "2018-12-26 15:47:27",
        null
        ));


        return redirect()->route('recetamedica');
    }

    public function guardarSinExpediente(Request $request)
    {
        //$Id_receta= $request->Id_receta;
      
        $tipoA=Session::get('sesiontipo');

        $Folio = $request->Folio;
        $tipo = $request->tipo;
        // $Area = $request->Area;
        $Clave_servicio = $request->Clave_servicio;
        $Nom_servicio = $request->Nom_servicio;

        $No_licencia = $request->No_licencia;
        $Cobertura = $request->Cobertura;
        $Fecha_Elaboracion = $request->Fecha_Elaboracion;
        $No_Afiliacion = $request->No_Afiliacion;
        $Nombre = $request->Nombre;

        $Apellido_P = $request->Apellido_P;
        $Apellido_M = $request->Apellido_M;
        $Clave_M = $request->Clave_M;
        $Nombre_M = $request->Nombre_M;
        $Clave_Diagnostico = $request->Clave_Diagnostico;

        $Dosis = $request->Dosis;
        $Duracion = $request->Duracion;
        $Cantidad_solicitada = $request->Cantidad_solicitada;
        $Cantidad_surtida = $request->Cantidad_surtida;
        $Edad = $request->Edad;

        $Genero = $request->Genero;
        $Clave_M2 = $request->Clave_M2;
        $Nombre_M2 = $request->Nombre_M2;
        $Clave_Diagnostico2 = $request->Clave_Diagnostico2;
        $Dosis2 = $request->Dosis2;

        $Duracion2 = $request->Duracion2;
        $Cantidad_solicitada2 = $request->Cantidad_solicitada2;
        $Cantidad_surtida2 = $request->Cantidad_surtida2;
        $Clave_M3 = $request->Clave_M3;
        $Nombre_M3 = $request->Nombre_M3;

        $Clave_Diagnostico3 = $request->Clave_Diagnostico3;
        $Dosis3 = $request->Dosis3;
        $Duracion3 = $request->Duracion3;
        $Cantidad_solicitada3 = $request->Cantidad_solicitada3;
        $Cantidad_surtida3 = $request->Cantidad_surtida3;

        $Ent_cajas = $request->Ent_cajas;
        $Recibi_cajas = $request->Recibi_cajas;
        $Fecha_recibido = $request->Fecha_recibido;
        $Id_expediente = $request->Id_expediente;
        $Id_unidad = $request->Id_unidad;

        $idt = Session::get('sesionidt');
        $Id_trabajador = $idt;

        $validatedData = $request->validate([
        'Cantidad_solicitada' => 'required',
    ]);

        $data = DB::table('minventarios')
        ->where('medicamento', '=', $Nombre_M)
        ->select('minventarios.*')
        ->get();
        foreach ($data as $value) {
            $id = $value->id;
            $cdg_medica = $value->medi_mat;
            $medic = $value->medicamento;
            $N_exis1 = $value->existencia;

            $N_exisF = $N_exis1 - $Cantidad_solicitada;

            $data = DB::table('minventarios')
            ->where('id', $id)
            ->update(['existencia' => $N_exisF]);
        }

        $dataCE = DB::table('minventarios')
         ->where('medicamento', '=', $Nombre_M)
         ->select('minventarios.*')
         ->get();
        foreach ($dataCE as $valueCE) {
            $id = $valueCE->id;
            $cdg_medicaCE = $valueCE->medi_mat;
            $medicCE = $valueCE->medicamento;
            $N_exis1CE = $valueCE->existencia;

    
        }


     
        // echo $Area;
        DB::select('call insertaRecetaID(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        array(null,
        $Folio,
        $tipo,
        $tipoA,
        $Clave_servicio,
        $Nom_servicio,
        $No_licencia,
        $Cobertura,
        $Fecha_Elaboracion,
        null,
        $Nombre,
        $Apellido_P,
        $Apellido_M,
        $Clave_M ,
        $Nombre_M,
        $Clave_Diagnostico,
        $Dosis,
        $Duracion,
        $Cantidad_solicitada,
        $Cantidad_surtida,
        "MOTI",
        $Edad,
        $Genero,
        $Clave_M2,
        $Nombre_M2 ,
        $Clave_Diagnostico2,
        $Dosis2,
        $Duracion2,
        $Cantidad_solicitada2,
        $Cantidad_surtida2,
        "motivo2",
        $Clave_M3,
        $Nombre_M3,
        $Clave_Diagnostico3,
        $Dosis3,
        $Duracion3,
        $Cantidad_solicitada3,
        $Cantidad_surtida3,
        "motivo3",
        $Ent_cajas,
        $Recibi_cajas,
        $Fecha_recibido,
       null,
        $Id_unidad,
        $Id_trabajador,
        "remember_token",
        "2018-12-26 15:47:27",
        "2018-12-26 15:47:27",
        null
        ));
        return redirect()->route('recetapoblacion');

    }

    public function eliminarm($Id_receta)
    {
        recetas_medicas::withTrashed()->where('Id_receta', $Id_receta)->forceDelete();

        return redirect()->route('principalrm');
    }



    public function desactivarmSin($Id_receta)
    {
        recetas_medicas::find($Id_receta)->delete();

        return redirect()->route('recetapoblacion');
    }

    public function restaurarmSin($Id_receta)
    {
        recetas_medicas::withTrashed()->where('Id_receta', $Id_receta)->restore();

        return redirect()->route('recetapoblacion');
    }


    public function desactivarm($Id_receta)
    {
        recetas_medicas::find($Id_receta)->delete();

        return redirect()->route('recetamedica');
    }

    public function restaurarm($Id_receta)
    {
        recetas_medicas::withTrashed()->where('Id_receta', $Id_receta)->restore();

        return redirect()->route('recetamedica');
    }

    public function revisarm($Id_receta)
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de
		continuar');

            return redirect()->route('index');
        } else {
            $recetas_medicas = recetas_medicas::where('Id_receta', '=', $Id_receta)->get();
            $idt = $recetas_medicas[0]->Id_trabajador;
            $trabajadores = trabajadores::where('Id_trabajador', '=', $idt)->get();
            $unidades = unidades::where('Id_Unidad', '=', '1')
                              ->orderBy('nom_unidad', 'asc')
                              ->get();

            return view('RecetaMedica_Revisar')
        ->with('recetas_medicas', $recetas_medicas[0])
        ->with('unidades', $unidades[0])
        ->with('trabajadores', $trabajadores[0]);
        }
    }

    //Busquedas
    public function buscaxfrm()
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de
		continuar');

            return redirect()->route('index');
        } else {
            $clavequesigue = recetas_medicas::withTrashed()->orderBy('Id_receta', 'desc')
                                ->take(1)
                                ->get();
            if (count($clavequesigue) == 0) {
                $idrs = 1;
            } else {
                $idrs = $clavequesigue[0]->Id_receta + 1;
            }
            $idt = Session::get('sesionidt');
            $trabajadores = trabajadores::where('Id_trabajador', '=', $idt)->get();

            $tra = DB::table('trabajadores')
                ->join('unidades', 'trabajadores.id_unidad', '=', 'unidades.id_unidad')
                ->select('unidades.*', 'trabajadores.*')
                ->where('trabajadores.id_trabajador', '=', $idt)
                ->take(1)
                ->get();

            $cie = DB::table('tb_cie10')->select('id_cie10', 'codigo')->get();

            return view('buscafolioreceta')

 ->with('idrs', $idrs)
 ->with('tre', $tra)
 ->with('cie', $cie);
        }
    }

    public function medicamentos(Request $request)
    {
        $resultado = $request->get('medi');
        $resm = DB::table('minventarios')
            ->select('id_inventario', 'medi_mat')
            ->where('medicamento', '=', $resultado)
            ->take(1)
            ->get();

        return view('datos2')
            ->with('resm', $resm);
    }

    public function medicamentos1(Request $request)
    {
        $resultado = $request->get('medi');
        $resm1 = DB::table('minventarios')
            ->select('id_inventario', 'existencia')
            ->where('medicamento', '=', $resultado)
            ->take(1)
            ->get();

        return view('datos3')
            ->with('resm1', $resm1);
    }

    public function modimotivo($Id_receta)
    {
        if (Session::get('sesionidu') == '') {
            Session::flash('error', 'Es necesario loguearse antes de
		continuar');

            return redirect()->route('index');
        } else {
            $receta = recetas_medicas::where('Id_receta','=',$Id_receta)->get();
            $recetas_medicas = DB::table('recetas_medicas')
            ->join('expedientes', 'expedientes.id_expediente', '=', 'recetas_medicas.Id_expediente')
            ->join('unidades', 'recetas_medicas.id_unidad', '=', 'unidades.id_unidad')
            ->join('trabajadores', 'recetas_medicas.Id_trabajador', '=', 'trabajadores.id_trabajador')
                ->select('recetas_medicas.*', 'expedientes.*', 'unidades.*', 'trabajadores.*')
                ->where('recetas_medicas.Id_receta', '=', $Id_receta)
                ->take(1)
                ->get();

            return view('brecetaf')
        ->with('recetas_medicas', $recetas_medicas)
        ->with('receta',$receta);
        }
    }

    /*Funcion dany*/
    public function modimotivo2(Request $request)
    {
        $Id_receta = $request->Id_receta;
        $Folio = $request->Folio;
        $ordinariamedicamentoscontrolados = $request->ordinariamedicamentoscontrolados;
        $AreaUsu = $request->area;
        $Clave_servicio = $request->Clave_servicio;
        $Nom_servicio = $request->Nom_servicio;
        $No_licencia = $request->No_licencia;
        $Cobertura = $request->Cobertura;
        $Fecha_Elaboracion = $request->Fecha_Elaboracion;
        $No_Afiliacion = $request->No_Afiliacion;
        $Nombre = $request->Nombre;
        $Apellido_P = $request->Apellido_P;
        $Apellido_M = $request->Apellido_M;
        $Clave_M = $request->Clave_M;
        $Nombre_M = $request->Nombre_M;
        $Clave_Diagnostico = $request->Clave_Diagnostico;
        $Dosis = $request->Dosis;
        $Duracion = $request->Duracion;
        $Cantidad_solicitada = $request->Cantidad_solicitada;
        $Cantidad_surtida = $request->Cantidad_surtida;
        $motivo = $request->motivo;
        $Edad = $request->Edad;
        $Genero = $request->Genero;
        $Clave_M2 = $request->Clave_M2;
        $Nombre_M2 = $request->Nombre_M2;
        $Clave_Diagnostico2 = $request->Clave_Diagnostico2;
        $Dosis2 = $request->Dosis2;
        $Duracion2 = $request->Duracion2;
        $Cantidad_solicitada2 = $request->Cantidad_solicitada2;
        $Cantidad_surtida2 = $request->Cantidad_surtida2;
        $motivo2 = $request->motivo2;
        $Clave_M3 = $request->Clave_M3;
        $Nombre_M3 = $request->Nombre_M3;
        $Clave_Diagnostico3 = $request->Clave_Diagnostico3;
        $Dosis3 = $request->Dosis3;
        $Duracion3 = $request->Duracion3;
        $Cantidad_solicitada3 = $request->Cantidad_solicitada3;
        $Cantidad_surtida3 = $request->Cantidad_surtida3;
        $motivo3 = $request->motivo3;
        $Ent_cajas = $request->Ent_cajas;
        $Recibi_cajas = $request->Recibi_cajas;
        $estatus = $request->estatus;
        
        $Fecha_recibido = $request->Fecha_recibido;
        $Id_expediente = $request->Id_expediente;
        $Id_unidad = $request->Id_unidad;
        $Id_trabajador = $request->Id_trabajador;

        $rm = recetas_medicas::find($Id_receta);
        $rm->Id_receta = $request->Id_receta;
        $rm->Folio = $request->Folio;
        $rm->ordinariamedicamentoscontrolados = $request->ordinariamedicamentoscontrolados;
        $rm->AreaUsu = $request->AreaUsu;
        $rm->Clave_servicio = $request->Clave_servicio;
        $rm->Nom_servicio = $request->Nom_servicio;
        $rm->No_licencia = $request->No_licencia;
        $rm->Cobertura = $request->Cobertura;
        $rm->Fecha_Elaboracion = $request->Fecha_Elaboracion;
        $rm->No_Afiliacion = $request->No_Afiliacion;
        $rm->Nombre = $request->Nombre;
        $rm->Apellido_P = $request->Apellido_P;
        $rm->Apellido_M = $request->Apellido_M;
        $rm->Clave_M = $request->Clave_M;
        $rm->Nombre_M = $request->Nombre_M;
        $rm->Clave_Diagnostico = $request->Clave_Diagnostico;
        $rm->Dosis = $request->Dosis;
        $rm->Duracion = $request->Duracion;
        $rm->Cantidad_solicitada = $request->Cantidad_solicitada;
        $rm->Cantidad_surtida = $request->Cantidad_surtida;
        $rm->motivo = $request->motivo;
        $rm->Edad = $request->Edad;
        $rm->Genero = $request->Genero;
        $rm->Clave_M2 = $request->Clave_M2;
        $rm->Nombre_M2 = $request->Nombre_M2;
        $rm->Clave_Diagnostico2 = $request->Clave_Diagnostico2;
        $rm->Dosis2 = $request->Dosis2;
        $rm->Duracion2 = $request->Duracion2;
        $rm->Cantidad_solicitada2 = $request->Cantidad_solicitada2;
        $rm->Cantidad_surtida2 = $request->Cantidad_surtida2;
        $rm->motivo2 = $request->motivo2;
        $rm->Clave_M3 = $request->Clave_M3;
        $rm->Nombre_M3 = $request->Nombre_M3;
        $rm->Clave_Diagnostico3 = $request->Clave_Diagnostico3;
        $rm->Dosis3 = $request->Dosis3;
        $rm->Duracion3 = $request->Duracion3;
        $rm->Cantidad_solicitada3 = $request->Cantidad_solicitada3;
        $rm->Cantidad_surtida3 = $request->Cantidad_surtida3;
        $rm->motivo3 = $request->motivo3;
        $rm->Ent_cajas = $request->Ent_cajas;
        $rm->Recibi_cajas = $request->Recibi_cajas;
        $rm->estatus = $request->estatus;
        $rm->Fecha_recibido = $request->Fecha_recibido;
        $rm->Id_expediente = $request->Id_expediente;
        $rm->Id_unidad = $request->Id_unidad;
        $rm->Id_trabajador = $request->Id_trabajador;
        $rm->save();

        return view('datatables.recetas_medicafarm');
    }
}
