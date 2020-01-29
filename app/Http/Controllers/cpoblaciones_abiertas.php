<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\estados;
use App\municipios;
use App\poblaciones_abiertas;
use App\citas_pobabiertas;
use App\doctores;
use App\consultorios;
use Session;
use Yajra\Datatables\Datatables;


class cpoblaciones_abiertas extends Controller
{
    public function altaspa()
    {
if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
			$clavequesigue = poblaciones_abiertas::withTrashed()->orderBy('id_pob_abie','desc')
								->take(1)
								->get();
			if(count($clavequesigue)==0)
			{
				$idps=1;
			}
			else
			{
				$idps = $clavequesigue[0]->id_pob_abie+1;
			}

	$municipios = municipios::where('id_estado','=','11')
	    ->orderBy('nombre_municipio','asc')
		->get();		
   	$estados = estados::orderBy('nombre','asc')
		->get();
		return view('archivo.formulariopobabi')
		->with('idps',$idps)
		->with('municipios',$municipios)
		->with('estados',$estados);

		}
    }

    public function guardapob(Request $request)
    {
    	$id_pob_abie= $request->id_pob_abie;
    	$nom_paciente= $request->nom_paciente;
    	$ap_paciente= $request->ap_paciente;
    	$am_paciente= $request->am_paciente;
    	$curp= $request->curp;
    	$edad= $request->edad;
    	$fecha_nacimiento= $request->fecha_nacimiento;
    	$sexo= $request->sexo;
    	$nom_vialidad= $request->nom_vialidad;
    	$tipo_vialidad= $request->tipo_vialidad;
    	$num_int= $request->num_int;
    	$num_ext= $request->num_ext;
    	$nombre_asentamiento= $request->nombre_asentamiento;
    	$tipo_asentamiento= $request->tipo_asentamiento;
    	$cp= $request->cp;
    	$localidad= $request->localidad;
    	$telefono= $request->telefono;
    	$id_municipio=$request->id_municipio;
    	$id_estado=$request->id_estado;
    	$id_municipio=$request->id_municipio;

        $this->validate($request,[
         'nom_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'ap_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'am_paciente'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'curp'=>['regex:/^[A-Z,0-9]{18}$/'],
		 'edad'=>'required|integer|max:120',
		 'nom_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'tipo_vialidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'num_int'=>'integer',
		 'num_ext'=>'required|integer',
		 'nombre_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'tipo_asentamiento'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'localidad'=>['regex:/^[A-Z,0-9,a-z, ,ñ,é,í,á,ó,ú]*$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/']
		 ]);  

        $cpob = new poblaciones_abiertas;
        $cpob->id_pob_abie= $request->id_pob_abie;
        $cpob->nom_paciente= $request->nom_paciente;
        $cpob->ap_paciente= $request->ap_paciente;
        $cpob->am_paciente= $request->am_paciente;
        $cpob->curp= $request->curp;
        $cpob->edad= $request->edad;
        $cpob->fecha_nacimiento= $request->fecha_nacimiento;
        $cpob->sexo= $request->sexo;
        $cpob->nom_vialidad= $request->nom_vialidad;
        $cpob->tipo_vialidad= $request->tipo_vialidad;
        $cpob->num_int= $request->num_int;
        $cpob->num_ext= $request->num_ext;
        $cpob->nombre_asentamiento= $request->nombre_asentamiento;
        $cpob->tipo_asentamiento= $request->tipo_asentamiento;
        $cpob->cp= $request->cp;
        $cpob->localidad= $request->localidad;
        $cpob->telefono= $request->telefono;
        $cpob->id_municipio= $request->id_municipio;
        $cpob->id_estado= $request->id_estado;
        $cpob->nom_paciente= $request->nom_paciente;
        $cpob->save();
        return redirect()->route('reporte');
    }

    public function formaltacitapobab($id_pob_abie)
    {
        if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {
        $clavequesigue = citas_pobabiertas::withTrashed()->orderBy('id_citapobabi','desc')
                                ->take(1)
                                ->get();
            if(count($clavequesigue)==0)
        {
            $idcpa=1;
        }
        else{
            $idcpa = $clavequesigue[0]->id_citapobabi+1;
        }
        $consultorio= consultorios::select('num_consul')
        ->get();
        $doctor= doctores::select('nom_doc','ap_doc','am_doc')
        ->get();
        $poblacion= poblaciones_abiertas::where('id_pob_abie','=',$id_pob_abie)
        ->get();
        return view('archivo.formaltacitapobabi')
        ->with('consultorio',$consultorio)
        ->with('idcpa',$idcpa)
        ->with('doctor',$doctor)
        ->with('poblacion',$poblacion[0]);
    }
    }

    public function gucipobabi(Request $request)
    {
        $citpobab = new citas_pobabiertas;
        $citpobab->id_citapobabi= $request->id_citapobabi;
        $citpobab->nom_paciente= $request->nom_paciente;
        $citpobab->ap_paciente= $request->ap_paciente;
        $citpobab->am_paciente= $request->am_paciente;
        $citpobab->num_consul= $request->num_consul;
        $citpobab->doctor= $request->doctor;
        $citpobab->fecha= $request->fecha;
        $citpobab->hora= $request->hora;
        $citpobab->area_med= $request->area_med;
        $citpobab->save();
        return redirect()->route('reporte');
    }

    public function reportecpoblacion()
    {
        if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {
        $pob_ab = DB::table('poblaciones_abiertas')
            ->select('poblaciones_abiertas.*','nom_paciente','ap_paciente',
            'am_paciente','curp','edad', 'sexo', 'telefono')
            ->paginate(4);
        return view('archivo.reppoblacionesabiertas')
        ->with('pob_ab',$pob_ab);
        }
    }

    //Busqueda de expedintes con ajax jquery
    public function busquedaPob(Request $request)
    {
        $resultado= $request->get('datos');
        // LA PARTE REQUEST DONDE RECIBE DATOS TOMARA EL VALOR DE LA VARIABLE DATOS PROVENIENTE DE LA VISTA CONSULTAPACIENTE
        $res=poblaciones_abiertas::select('id_pob_abie','nom_paciente','ap_paciente', 'am_paciente', 'curp','edad', 'sexo', 'telefono')
        ->orderBy('id_pob_abie')
        //USAMOS LIKE PARA BUSCAR VALORES QUE CONTENGAN LOS CARACTERES SIMILARES A LA CAJA DE TEXTO
        ->where('nom_paciente','LIKE','%'.$resultado.'%')
        ->orwhere('ap_paciente','LIKE','%'.$resultado.'%')
        ->orwhere('am_paciente','LIKE','%'.$resultado.'%')
        ->orwhere('curp','LIKE','%'.$resultado.'%')
        ->orwhere('sexo','LIKE','%'.$resultado.'%')
        ->get();
        
        return view('archivo.busquedapoblacionabierta')
        ->with('res',$res);
    }

    public function detallespobabi($id_pob_abie)
    {
        $poblacion= poblaciones_abiertas::where('id_pob_abie','=',$id_pob_abie)
        ->get();
        
        $id_municipio = $poblacion[0]->id_municipio;
        $id_estado = $poblacion[0]->id_estado;
        
        $municipio= municipios::where('id_municipio','=',$id_municipio)
        ->get();
        $estado= estados::where('id_estado','=',$id_estado)
        ->get();
        
        $poblacionabierta=poblaciones_abiertas::join('municipios', 'municipios.id_municipio','=' ,'poblaciones_abiertas.id_municipio')
                ->join('estados', 'estados.id_estado', '=', 'poblaciones_abiertas.id_estado')
                ->select('poblaciones_abiertas.id_pob_abie', 'poblaciones_abiertas.nom_paciente', 'poblaciones_abiertas.ap_paciente','poblaciones_abiertas.am_paciente', 'poblaciones_abiertas.curp','poblaciones_abiertas.edad', 'municipios.nombre_municipio', 'estados.nombre')
                ->where('poblaciones_abiertas.id_pob_abie', $id_pob_abie)
                ->get();

        $nombre= $poblacion[0]->nom_paciente;
        $citaspobabi= citas_pobabiertas::where('nom_paciente', '=' ,$nombre)->get();
        
        return view('archivo.detallespobl_abierta')
        ->with('poblacion', $poblacion[0])
        ->with('municipio', $municipio[0])
        ->with('estado', $estado[0])
        ->with('poblacionabierta', $poblacionabierta)
        ->with('citaspobabi',$citaspobabi);
    }

    public function prin()
    {
        return view('archivo.busquedacitas');
    }

    public function obtenercitasPoblacionabierta()
    {
        $query=DB::table('citas_pobabiertas')
            ->select('id_citapobabi', 'nom_paciente', 'ap_paciente', 'am_paciente', 'fecha', 'hora', 'area_med', 'num_consul', 'doctor', 'asistencia');
    return datatables::of($query)       
        ->addColumn('btn', 'actions.actions_citaspobabiertas')       
        ->rawColumns(['btn'])
        ->toJson();
    }

    public function eliminacita($id_citapobabi)
    {
    citas_pobabiertas::withTrashed()->where('id_citapobabi',$id_citapobabi)->forceDelete();
    return redirect()->route('inicio');
    }

    public function guardasistencia(Request $request)
    {
        $asistencia= $request->asistencia;
        
        $gasis = new citas_pobabiertas;
        $gasis->asistencia= $request->asistencia;
        $gasis->save();
        return redirect()->route('inicio');
    }
}