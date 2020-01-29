<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\trabajadores;
use App\expedientes;
use App\pacientes;
use App\historial_expedientes;
use App\areas;
use DB;
use App\unidades;
use App\citas;
use App\resultadosexp;
use Yajra\Datatables\Datatables;
use Session;
use App\recetas_medicas;
use Illuminate\Http\Request;
use App\minventarios;
use App\tb_cie10;


class carchivo extends Controller
{
	/**************************************Obtener recetas sin expediente */

public function obtenerRecetaSin()
{
	/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
	if(Session::get('sesiontipo')=="Doctor"){
		$idt = Session::get('sesionidt');
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_trabajador', '=', $idt )
		->where('recetas_medicas.Id_expediente', '=', null )
		->where('recetas_medicas.No_Afiliacion', '=', null )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio',
		'recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P',
		'recetas_medicas.Apellido_M AS Apellido_M','recetas_medicas.estatus AS estatus',
		'trabajadores.nombre_tra AS nombre_tra',
		'recetas_medicas.deleted_at AS deleted_at'])
		->whereNull('recetas_medicas.deleted_at');


	}else{
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_expediente', '=', null )
		->where('recetas_medicas.No_Afiliacion', '=', null )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio','recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P','recetas_medicas.Apellido_M AS Apellido_M',
		'recetas_medicas.estatus AS estatus', 'trabajadores.nombre_tra AS nombre_tra','recetas_medicas.deleted_at AS deleted_at'
		])->whereNull('recetas_medicas.deleted_at');
	}
	
	return datatables::of($query)
	->addColumn('btn', 'actions.actions_recetas_sinExpe')		
	->rawColumns(['btn'])	
	->toJson();
}

public function obtenerRecetaInaSin()
{
	if(Session::get('sesiontipo')=="Doctor"){
		$idt = Session::get('sesionidt');
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_trabajador', '=', $idt )
		->where('recetas_medicas.Id_expediente', '=', null )
		->where('recetas_medicas.No_Afiliacion', '=', null )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio',
		'recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P',
		'recetas_medicas.Apellido_M AS Apellido_M','recetas_medicas.estatus AS estatus',
		'trabajadores.nombre_tra AS nombre_tra',
		'recetas_medicas.deleted_at AS deleted_at'])
		->whereNotNull('recetas_medicas.deleted_at');

	}else{
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_expediente', '=', null )
		->where('recetas_medicas.No_Afiliacion', '=', null )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio','recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P','recetas_medicas.Apellido_M AS Apellido_M',
		'recetas_medicas.estatus AS estatus', 'trabajadores.nombre_tra AS nombre_tra','recetas_medicas.deleted_at AS deleted_at'
		])
		->whereNotNull('recetas_medicas.deleted_at');
	}


	return datatables::of($query)		
	->addColumn('btn', 'actions.actions_recetas_sinExpe')		
	->rawColumns(['btn'])		
	->toJson();
}


	
	//Pantalla para busqueda expedientes
  	public function principalconsulta()
	{
	if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$paciente =pacientes::orderBy('id_paciente', 'des')
            ->select('pacientes.*','pacientes.nom_paciente','pacientes.ap_paciente', 'pacientes.am_paciente', 'pacientes.curp','pacientes.num_afiliacion','pacientes.edad', 'pacientes.sexo')
            ->get();
	return view('archivo.consultapaciente')
	->with('paciente', $paciente);
	}}
	
    public function busquedatb(Request $request)
	{
		$resultado= $request->get('datos');
		
		// LA PARTE REQUEST DONDE RECIBE DATOS TOMARA EL VALOR DE LA VARIABLE DATOS PROVENIENTE DE LA VISTA CONSULTAPACIENTE
		$res=tb_cie10::select('tb_cie10.id_cie10','tb_cie10.codigo','tb_cie10.descripcion')
		//USAMOS LIKE PARA BUSCAR VALORES QUE CONTENGAN LOS CARACTERES SIMILARES A LA CAJA DE TEXTO
		->where('tb_cie10.id_cie10','LIKE','%'.$resultado.'%')
		->orwhere('tb_cie10.codigo','LIKE','%'.$resultado.'%')
		->orwhere('tb_cie10.descripcion','LIKE','%'.$resultado.'%')
		->get();
		
		return view('p')
		->with('res',$res);
		
	}
	public function obtenertb()
    {
		/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
		$query=tb_cie10::select(['tb_cie10.id_cie10 AS id_cie10','tb_cie10.codigo AS codigo','tb_cie10.descripcion AS descripcion']);
        
        return datatables::of($query)
		->addColumn('btn', 'actions.actions_recetas')		
		->rawColumns(['btn'])		
		->toJson();
    }

	
    public function busquedaInventario(Request $request)
	{
		$resultado= $request->get('datos');
		
		// LA PARTE REQUEST DONDE RECIBE DATOS TOMARA EL VALOR DE LA VARIABLE DATOS PROVENIENTE DE LA VISTA CONSULTAPACIENTE
		$res=minventarios::select('minventarios.id','minventarios.medi_mat','minventarios.medicamento','minventarios.existencia')
		//USAMOS LIKE PARA BUSCAR VALORES QUE CONTENGAN LOS CARACTERES SIMILARES A LA CAJA DE TEXTO
		->where('minventarios.id','LIKE','%'.$resultado.'%')
		->orwhere('minventarios.medi_mat','LIKE','%'.$resultado.'%')
		->orwhere('minventarios.medicamento','LIKE','%'.$resultado.'%')
		->orwhere('minventarios.existencia','LIKE','%'.$resultado.'%')
		->get();
		
		return view('p')
		->with('res',$res);
		
	}
	public function obtenerInventario()
    {
		/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
		$query=minventarios::select(['minventarios.id AS id','minventarios.medi_mat AS medi_mat','minventarios.medicamento AS medicamento','minventarios.existencia AS existencia']);
        
        return datatables::of($query)
		->addColumn('btn', 'actions.actions_recetas')		
		->rawColumns(['btn'])		
		->toJson();
    }

	




	//Busqueda de expedintes con ajax jquery
	public function busquedaArc(Request $request)
	{
		$resultado= $request->get('datos');
		// LA PARTE REQUEST DONDE RECIBE DATOS TOMARA EL VALOR DE LA VARIABLE DATOS PROVENIENTE DE LA VISTA CONSULTAPACIENTE
		$res=expedientes::join('pacientes', 'pacientes.id_paciente', '=', 'expedientes.id_paciente')
		->select('expedientes.id_expediente','pacientes.nom_paciente','pacientes.ap_paciente', 'pacientes.am_paciente', 'pacientes.curp','pacientes.num_afiliacion'
				,'pacientes.edad', 'pacientes.sexo', 'expedientes.ubicacion')
		->orderBy('expedientes.id_expediente', 'des')
		//USAMOS LIKE PARA BUSCAR VALORES QUE CONTENGAN LOS CARACTERES SIMILARES A LA CAJA DE TEXTO
		->where('pacientes.nom_paciente','LIKE','%'.$resultado.'%')
		->orwhere('pacientes.ap_paciente','LIKE','%'.$resultado.'%')
		->orwhere('pacientes.am_paciente','LIKE','%'.$resultado.'%')
		->orwhere('pacientes.num_afiliacion','LIKE','%'.$resultado.'%')
		->orwhere('pacientes.curp','LIKE','%'.$resultado.'%')
		
		->get();
		
		return view('archivo.busquedaexpedientes')
		->with('res',$res);
	}
	
	public function busquedaIna(Request $request)
	{
		$resultado= $request->get('datos');
		$trashes=expedientes::select('id_expediente')
		->onlyTrashed()
		->get();
		
		$ina=expedientes::join('pacientes', 'pacientes.id_paciente', '=', 'expedientes.id_paciente')		
		->select('expedientes.id_expediente','pacientes.nom_paciente','pacientes.ap_paciente', 'pacientes.am_paciente', 'pacientes.curp','pacientes.num_afiliacion'
				,'pacientes.edad', 'pacientes.sexo', 'expedientes.ubicacion')
		->orderBy('expedientes.id_expediente', 'des')		
		
		->onlyTrashed()	
		->get();
		
		return view('archivo.busquedaInac')
		->with('ina',$ina);
		
	}
	
	public function prestamoexpediente($id_expediente)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
		$clavequesigue = historial_expedientes::withTrashed()->orderBy('id_his','desc')
								->take(1)
								->get();			
		if(count($clavequesigue)==0)
		{
		$idcus=1;
		}
		else{
		$idcus = $clavequesigue[0]->id_his+1;
		}
		$idt=Session::get('sesionidt');

        $trabajadores=trabajadores::orderBy('id_trabajador')
            ->select('id_trabajador','nombre_tra', 'ap_tra', 'am_tra')
            ->get();

        $area=areas::orderBy('id_area')
        	->select('id_area','nombre_area')
        	->get();


        $areac=expedientes::join('areas', 'expedientes.ubicacion', 'areas.nombre_area')
        	->select('expedientes.ubicacion')
        	->where('expedientes.id_expediente', $id_expediente)
        	->get();	

		return view('archivo.formularioprestamoexp')
		->with('expedientes',$expedientes[0])
		->with('trabajadores', $trabajadores)
		->with('idcus', $idcus)
		->with('area', $area)
		->with('areac',$areac);
		}
	}
	
	// Guarda la ubicación del expediente
	public function guardapresexp(Request $request)
	{
		$Historial_expedientes = new historial_expedientes();
		$Historial_expedientes->id_expediente = $request->id_expediente;
		$Historial_expedientes->id_trabajador = $request->id_trabajador;
		$Historial_expedientes->id_area = $request->id_area;
		$Historial_expedientes->save();

		
		$ubicacion= $request->id_area;
		$id_expediente= $request->id_expediente;
		$narea=areas::orderBy('id_area')
			->select('nombre_area')
			->where('id_area', $ubicacion)
			->first();

			$cambio=expedientes::find($id_expediente);
		$cambio->ubicacion=$narea->nombre_area;
		$cambio->save();
		
	return redirect()->route('detalleexp',$id_expediente);

	}
	
	// Detalles del expediente seleccionado
	public function detalleexp($id_expediente)
	{
		
		
		$expedientes= expedientes::where('id_expediente','=',$id_expediente)
			->withTrashed()
			->get();
		
		
		$id_unidad = $expedientes[0]->id_unidad;
		$id_paciente = $expedientes[0]->id_paciente;
		
		$unidades= unidades::where('id_unidad','=',$id_unidad)
		->get();
		$pacientes= pacientes::where('id_paciente','=',$id_paciente)
		->get();
		
		$afili=$pacientes[0]->num_afiliacion;
		
		$ffamm=pacientes::join('expedientes', 'pacientes.id_paciente','=' ,'expedientes.id_paciente')
		->select('pacientes.ap_paciente', 'pacientes.am_paciente', 'pacientes.nom_paciente', 'pacientes.curp', 'expedientes.parentesco', 'pacientes.num_afiliacion','pacientes.id_paciente','expedientes.id_expediente')
		->where('pacientes.num_afiliacion', $afili)
		->whereNull('expedientes.deleted_at')
		->get();			
		
		$historial=historial_expedientes::join('expedientes', 'expedientes.id_expediente','=' ,'historial_expedientes.id_expediente')
				->join('trabajadores', 'trabajadores.id_trabajador', '=', 'historial_expedientes.id_trabajador')
				->join('areas', 'areas.id_area', '=', 'historial_expedientes.id_area')
				->select('historial_expedientes.id_expediente', 'trabajadores.ap_tra', 'trabajadores.am_tra','trabajadores.nombre_tra','areas.nombre_area', 'historial_expedientes.created_at')
				->where('expedientes.id_expediente', $id_expediente)
				->get();
		
		$his_citas=citas::orderBy('citas.id_cit', 'des')
					->where('citas.id_expediente', $id_expediente)
					->get();
		
		return view('archivo.detalle_expediente')
		->with('expedientes', $expedientes[0])
		->with('unidades', $unidades[0])
		->with('pacientes', $pacientes[0])
		->with('historial', $historial)
		->with('ffamm', $ffamm)
		->with('his_citas', $his_citas);
		
	}
	
	public function prin(){
		return view('archivo.busquedaexxpedientes');
	}
	
	public function obtenerExpedientes()
    {
		/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
        $query=expedientes::join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
			->select(['expedientes.id_expediente AS id_expediente','expedientes.expediente AS expediente', 'expedientes.ubicacion AS ubicacion', 'pacientes.nom_paciente AS nom_paciente', 'pacientes.ap_paciente AS ap_paciente', 
					'pacientes.am_paciente AS am_paciente','pacientes.edad AS edad','pacientes.sexo AS sexo', 'expedientes.parentesco AS parentesco',
					'pacientes.curp AS curp', 'pacientes.num_afiliacion AS num_afiliacion', 'expedientes.deleted_at AS deleted_at'
					])->whereNull('expedientes.deleted_at');
	return datatables::of($query)
		
		->addColumn('btn', 'actions.actions_expedientes')		
		->rawColumns(['btn'])		
		->toJson();
    }
	
	
	public function obtenerExpedientesIna()
    {
		/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
        $query=DB::table('expedientes')
			->join('pacientes', 'expedientes.id_paciente', '=', 'pacientes.id_paciente')
			->select(['expedientes.id_expediente AS id_expediente','expedientes.expediente AS expediente', 'expedientes.ubicacion AS ubicacion', 'pacientes.nom_paciente AS nom_paciente', 'pacientes.ap_paciente AS ap_paciente', 
					'pacientes.am_paciente AS am_paciente','pacientes.edad AS edad','pacientes.sexo AS sexo', 'expedientes.parentesco AS parentesco',
					'pacientes.curp AS curp', 'pacientes.num_afiliacion AS num_afiliacion', 'expedientes.deleted_at AS deleted_at'
					])->whereNotNull('expedientes.deleted_at');
	return datatables::of($query)		
		->addColumn('btn', 'actions.actions_expedientes')		
		->rawColumns(['btn'])		
		->toJson();
	}
	
	public function busquedaRece(Request $request)
	{
		$resultado= $request->get('datos');
		
		// LA PARTE REQUEST DONDE RECIBE DATOS TOMARA EL VALOR DE LA VARIABLE DATOS PROVENIENTE DE LA VISTA CONSULTAPACIENTE
		$res=recetas_medicas::select('recetas_medicas.Id_receta','recetas_medicas.Folio','recetas_medicas.Nombre','recetas_medicas.Apellido_P','recetas_medicas.estatus','recetas_estatus')
		//USAMOS LIKE PARA BUSCAR VALORES QUE CONTENGAN LOS CARACTERES SIMILARES A LA CAJA DE TEXTO
		->where('recetas_medicas.Id_receta','LIKE','%'.$resultado.'%')
		->where('recetas_medicas.Folio','LIKE','%'.$resultado.'%')
		->orwhere('recetas_medicas.Nombre','LIKE','%'.$resultado.'%')
		->orwhere('recetas_medicas.Apellido_P','LIKE','%'.$resultado.'%')
		->orwhere('recetas_medicas.Apellido_M','LIKE','%'.$resultado.'%')
		->orwhere('recetas_medicas.estatus','LIKE','%'.$resultado.'%')

		->get();
		
		return view('archivo.busquedareceta')
		->with('res',$res);
		
	}


	

	
public function obtenerReceta()
{
	/* DATATABLES CON UNION A OTRA TABLA DE PACIENTES 16/03/2019*/
	if(Session::get('sesiontipo')=="Doctor"){
		$idt = Session::get('sesionidt');
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_trabajador', '=', $idt )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio',
		'recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P',
		'recetas_medicas.Apellido_M AS Apellido_M','recetas_medicas.estatus AS estatus',
		'trabajadores.nombre_tra AS nombre_tra',
		'recetas_medicas.deleted_at AS deleted_at'])
		->whereNull('recetas_medicas.deleted_at');


	}else{
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio','recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P','recetas_medicas.Apellido_M AS Apellido_M',
		'recetas_medicas.estatus AS estatus', 'trabajadores.nombre_tra AS nombre_tra','recetas_medicas.deleted_at AS deleted_at'
		])->whereNull('recetas_medicas.deleted_at');
	}
	
	return datatables::of($query)
	->addColumn('btn', 'actions.actions_recetas')		
	->rawColumns(['btn'])	
	->toJson();
}

public function obtenerRecetaIna()
{
	if(Session::get('sesiontipo')=="Doctor"){
		$idt = Session::get('sesionidt');
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->where('recetas_medicas.Id_trabajador', '=', $idt )
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio',
		'recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P',
		'recetas_medicas.Apellido_M AS Apellido_M','recetas_medicas.estatus AS estatus',
		'trabajadores.nombre_tra AS nombre_tra',
		'recetas_medicas.deleted_at AS deleted_at'])
		->whereNotNull('recetas_medicas.deleted_at');

	}else{
		$query=DB::table('recetas_medicas')
		->join('trabajadores', 'recetas_medicas.Id_trabajador','=' ,'trabajadores.Id_trabajador')
		->select(['recetas_medicas.Id_receta AS Id_receta','recetas_medicas.Folio AS Folio','recetas_medicas.Nombre AS Nombre','recetas_medicas.Apellido_P AS Apellido_P','recetas_medicas.Apellido_M AS Apellido_M',
		'recetas_medicas.estatus AS estatus', 'trabajadores.nombre_tra AS nombre_tra','recetas_medicas.deleted_at AS deleted_at'
		])
		->whereNotNull('recetas_medicas.deleted_at');
	}


	return datatables::of($query)		
	->addColumn('btn', 'actions.actions_recetas')		
	->rawColumns(['btn'])		
	->toJson();
}
	public function modifi($id_expediente)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		//$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
		//$ubicacion = $expedientes[0]->ubicacion;
		//$parentesco = $expedientes[0]->parentesco;
		
		$fa=DB::table('expedientes')
		->join('pacientes', 'expedientes.id_paciente','=' ,'pacientes.id_paciente')
		->where('expedientes.id_expediente', '=', $id_expediente)
		->select('pacientes.*', 'expedientes.*')
		->take(1)
		->get();
								
	
		return view('archivo.modificaexpe')
		//->with('expedientes',$expedientes[0])
		//->with('ubicacion',$ubicacion)
		//->with('parentesco',$parentesco)
		->with('fa',$fa)
		;
	}

}
	
	public function guardamodifi(Request $request)
	{
		//$id_paciente = $request->id_paciente;
		$nom_paciente = $request->nom_paciente;
		$id_expediente= $request->id_expediente;
		$ubicacion= $request->ubicacion;
		$parentesco=$request->parentesco;
		$id_paciente=$request->id_paciente;
	
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$curp= $request->curp;
		$edad= $request->edad;
		$sexo= $request->sexo;
		$num_afiliacion= $request->num_afiliacion;
		$fecha_nacimiento= $request->fecha_nacimiento;
		$afiliacion_seguro= $request->afiliacion_seguro;
		$localidad= $request->localidad;
		$cp= $request->cp;
		//$telefono= $request->telefono;
		
		
		$expe = new expedientes;
            /*$expe->id_cit = $request->id_cit;*/
			$expe->id_expediente = $request->id_expediente;
			$expe->parentesco=$request->parentesco;
			$expe->ubicacion= $request->ubicacion;
			
		
		$expe->save();


		$expe2 = new pacientes;
			$expe2->id_paciente=$request->id_paciente;
			$expe2->nom_paciente = $request->nom_paciente;
			$expe2->ap_paciente= $request->ap_paciente;
			$expe2->am_paciente= $request->am_paciente;
			$expe2->edad= $request->edad;
			$expe2->sexo= $request->sexo;
			$expe2->curp= $request->curp;
			$expe2->num_afiliacion= $request->num_afiliacion;
			$expe2->fecha_nacimiento= $request->fecha_nacimiento;
			$expe2->afiliacion_seguro= $request->afiliacion_seguro;
			$expe2->localidad= $request->localidad;
			$expe2->cp= $request->cp;
			//$expe2->telefono= $request->telefono;
		$expe2->save();

		$mensaje = "Los datos se insertarón correctamente";
			echo "<script>";
			echo "alert('$mensaje');";  
			echo "window.location = 'expedientes';";
			echo "</script>"; 
		
		//$mo = new recetas_medicas;
		/*
		$gu=expedientes::find($id_expediente);
		$gu->ubicacion=$request->ubicacion;
		$gu->parentesco=$request->parentesco;
		$gu->save();

		$mo=pacientes::find($id_paciente);
		$mo->nom_paciente=$request->nom_paciente;
		$mo->ap_paciente=$request->ap_paciente;
		$mo->am_paciente=$request->am_paciente;
		$mo->curp=$request->curp;
		$mo->edad=$request->edad;
		$mo->sexo=$request->sexo;
		$mo->num_afiliacion=$request->num_afiliacion;
		$mo->fecha_nacimiento=$request->fecha_nacimiento;
		$mo->afiliacion_seguro=$request->afiliacion_seguro;
		$mo->localidad=$request->localidad;
		$mo->cp=$request->cp;
		$mo->telefono=$request->telefono;
		$mo->save();
		
		
		return view('archivo.busquedaexxpedientes');
		*/	
	}
	public function prestamo()	
	{
        if(Session::get('sesionidu')=="")
        {
        Session::flash('error', 'Es necesario loguearse antes de
        continuar');
         return redirect()->route('index');
        }
        else
        {
        $expedientes = DB::table('expedientes')
            ->select('expedientes.*','id_expediente','id_paciente',
            'estatus', 'ubicacion')
            ->paginate(4);
        return view('archivo.prestamo')
        ->with('id_expedientes',$expedientes);
        }
    }



	public function modifica($id_expediente)
	{
		if(Session::get('sesionidu')=="")
		{
		Session::flash('error', 'Es necesario loguearse antes de
		continuar');
	     return redirect()->route('index');
		}
		else
		{
		//$expedientes= expedientes::where('id_expediente','=',$id_expediente)->get();
		//$ubicacion = $expedientes[0]->ubicacion;
		//$parentesco = $expedientes[0]->parentesco;
		
		$fa=DB::table('expedientes')
		->join('pacientes', 'expedientes.id_paciente','=' ,'pacientes.id_paciente')
		->where('expedientes.id_expediente', '=', $id_expediente)
		->select('pacientes.*', 'expedientes.*')
		->take(1)
		->get();
								
	
		return view('archivo.modificaexpe')
		//->with('expedientes',$expedientes[0])
		//->with('ubicacion',$ubicacion)
		//->with('parentesco',$parentesco)
		->with('fa',$fa)
		;
	}

}
	
	public function guardamodifica(Request $request)
	{
		$id_paciente = $request->id_paciente;
		$nom_paciente = $request->nom_paciente;
		$id_expediente= $request->id_expediente;
		$ubicacion= $request->ubicacion;
		$parentesco=$request->parentesco;
	
		$ap_paciente= $request->ap_paciente;
		$am_paciente= $request->am_paciente;
		$curp= $request->curp;
		$edad= $request->edad;
		$sexo= $request->sexo;
		$num_afiliacion= $request->num_afiliacion;
		$fecha_nacimiento= $request->fecha_nacimiento;
		$afiliacion_seguro= $request->afiliacion_seguro;
		$localidad= $request->localidad;
		$cp= $request->cp;
		$telefono= $request->telefono;
		
		
		
		
		//$mo = new recetas_medicas;
		
		$gu=expedientes::find($id_expediente);
		$gu->ubicacion=$request->ubicacion;
		$gu->parentesco=$request->parentesco;
		$gu->save();

		$mo=pacientes::find($id_paciente);
		$mo->nom_paciente=$request->nom_paciente;
		$mo->ap_paciente=$request->ap_paciente;
		$mo->am_paciente=$request->am_paciente;
		$mo->curp=$request->curp;
		$mo->edad=$request->edad;
		$mo->sexo=$request->sexo;
		$mo->num_afiliacion=$request->num_afiliacion;
		$mo->fecha_nacimiento=$request->fecha_nacimiento;
		$mo->afiliacion_seguro=$request->afiliacion_seguro;
		$mo->localidad=$request->localidad;
		$mo->cp=$request->cp;
		$mo->telefono=$request->telefono;
		$mo->save();
		
		
		return view('archivo.busquedaexxpedientes');	
	}


}