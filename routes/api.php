<?php

use Illuminate\Http\Request;
use App\recetas_medicas;
use App\unidades;
use App\trabajadores;
use App\citas;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('recetamedica', function (){
	

	//return App\User::all();
	return datatables()
		->eloquent(App\recetas_medicas::query())
		->addColumn('btn', 'actions.actions_recetas')
		->rawColumns(['btn'])
		->toJson();

});















Route::get('conexpedientes', function (){
	

	//return App\User::all();
	return datatables()
		->eloquent(App\citas::query())
		->addColumn('btn', 'actions.actions_1')
		->rawColumns(['btn'])
		->toJson();

});


















Route::get('conexpedientes_citas_del_dia_actual', function (){
	

	//return App\User::all();
	return datatables()
		->eloquent(App\citas::query())
		->addColumn('btn', 'actions.actions_2')
		->rawColumns(['btn'])
		->toJson();

});









































Route::get('historiaclinicageneral', function (){

	//return App\User::all();
	return datatables()
		->eloquent(App\historias_clinicas::query())
		->addColumn('btn', 'actions.actions')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('notasevolucion', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\notas::query())
		->addColumn('btn', 'actions.actionsNE')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('estudiogabinete', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\estudios_gabinetes::query())
		->addColumn('btn', 'actions.actions_gabinete')
		->rawColumns(['btn'])
		->toJson();

});




Route::get('solicitudlaboratorio', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\solicitudes_laboratorios::query())
		->addColumn('btn', 'actions.actions_solicitudlaboratorio')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('consultaurgencia', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\consultas_urgencias::query())
		->addColumn('btn', 'actions.actions_consulta_urgencia')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('consentimientoinformado', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\consentimientos_informados::query())
		->addColumn('btn', 'actions.actions_consentimientoinformado')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('hojatriage', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\hojas_triages::query())
		->addColumn('btn', 'actions.actions_hoja_triage')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('triageobstetrico', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\triages_obstetricos::query())
		->addColumn('btn', 'actions.actions_triage_obstetrico')
		->rawColumns(['btn'])
		->toJson();

});



Route::get('triageobstetrico16', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\triages16_obstetricos::query())
		->addColumn('btn', 'actions.actions_triageobstetrico16')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('usuarios', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\usuarios::query())
		->addColumn('btn', 'actions.actions_dtusuario')
		->rawColumns(['btn'])
		->toJson();

});

/////ADMINISTRADOR ARCHIVO//////////

Route::get('usuarios2', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\usuarios::query() 
			->where('area', '=', 'archivo')
			
			 )
		
		->addColumn('btn', 'actions.actions_dtusuario2')
		->rawColumns(['btn'])
		->toJson();

});


/////ADMINISTRADOR ARCHIVO//////////

Route::get('trabajadores', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\trabajadores::query())
		->addColumn('btn', 'actions.actions_trabajadores')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('pacientes', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\pacientes::query())
		->addColumn('btn', 'actions.actions_pacientes')
		->rawColumns(['btn'])
		->toJson();

});

Route::get('expedientes', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\expedientes::query())
		->addColumn('btn', 'actions.actions_expedientes')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('inventario', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\minventarios::query())
		->addColumn('btn', 'actions.actions_inventario')
		->addColumn('btn1', 'actions.actions_inventario1')
		->rawColumns(['btn', 'btn1'])

		->toJson();

});


Route::get('recetamedicafarm', function (){
	

	//return App\User::all();
	return datatables()
		->eloquent(App\recetas_medicas::query())
	->addColumn('btn', 'actions.rm')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('recetapoblacion', function (){
	

	//return App\User::all();
	return datatables()
		->eloquent(App\recetas_medicas::query())
	->addColumn('btn', 'actions.rmpoblacion')
		->rawColumns(['btn'])
		->toJson();

});


Route::get('poblaciones_abiertas', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\poblaciones_abiertas::query())
		->addColumn('btn', 'actions.actions_pobabie')
		->rawColumns(['btn'])
		->toJson();

});