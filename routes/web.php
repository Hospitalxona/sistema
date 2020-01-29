<?php
/*Login*/
Route::get('/index','login@index')->name('index');
Route::POST('/validalogin','login@validalogin')->name('validalogin');
Route::get('/inicio','login@inicio')->name('inicio');
Route::get('/cerrarsesion','login@cerrarsesion')->name('cerrarsesion');

/////////////////////////PERFIL DE ADMINISTRADOR///////////////////////////////////////////////////////
Route::get('/usuariosdef', 'cusuarios@principal3')->name('datatable.usuariosdef');

///////////////////////////////////////////////////////////////

////////////////////////////*Usuarios*///////////////////////////////////////

Route::get('/usuarios','cusuarios@principal')->name('principal');
Route::get('/usuarios2','cusuarios@principal2')->name('principal2');

Route::get('/perfilusuario','cusuarios@perfilusuario')->name('perfilusuario');
Route::get('/altausu','cusuarios@altausuarios');
Route::POST('/guardausuario','cusuarios@guardausuario')->name('guardausuario');
/*Acciones*/
Route::get('/desactivau/{id_usuario}','cusuarios@desactivau')->name('desactivau');
Route::get('/restaurau/{id_usuario}','cusuarios@restaurau')->name('restaurau');
Route::get('/eliminau/{id_usuario}','cusuarios@eliminau')->name('eliminau');
Route::get('/modificau/{id_usuario}','cusuarios@modificau')->name('modificau');
Route::POST('/modificausuario','cusuarios@modificausuario')->name('modificausuario');
Route::get('/mod','cusuarios@modu');


/*SIN EXPEDIENTES*/
Route::get('/recetaInaSin', 'carchivo@obtenerRecetaInaSin')->name('datatable.recetas_medicasInaSin');
Route::get('/recetaSin', 'carchivo@obtenerRecetaSin')->name('datatable.recetas_medicasSin');
Route::POST('/guardarSinExpediente','crecetamedica@guardarSinExpediente')->name('guardarSinExpediente');
Route::get('/desactivarmSin/{Id_receta}','crecetamedica@desactivarmSin')->name('desactivarmSin');
Route::get('/restaurarmSin/{Id_receta}','crecetamedica@restaurarmSin')->name('restaurarmSin');


/////////////////////////////*TRABAJADORES*////////////////////////////////////

Route::get('/trabajadores','ctrabajadores@principalt')->name('principalt');
Route::get('/altatra','ctrabajadores@altatrabajadores')->name('altatrabajadores');
Route::POST('/guardatrabajador','ctrabajadores@guardatrabajador')->name('guardatrabajador');
/*Acciones*/
Route::get('/desactivat/{id_trabajador}','ctrabajadores@desactivat')->name('desactivat');
Route::get('/restaurat/{id_trabajador}','ctrabajadores@restaurat')->name('restaurat');
Route::get('/eliminat/{id_trabajador}','ctrabajadores@eliminat')->name('eliminat');
Route::get('/modificat/{id_trabajador}','ctrabajadores@modificat')->name('modificat');
Route::POST('/modificatrabajador','ctrabajadores@modificatrabajador')->name('modificatrabajador');



///////////////////////////////////*Pacientes*////////////////////////7////////////////

Route::get('/pacientes','cpacientes@principalp')->name('principalp');
Route::get('/altapac','cpacientes@altapacientes')->name('altapacientes');
Route::POST('/guardapaciente','cpacientes@guardapaciente')->name('guardapaciente');
/*Acciones*/
Route::get('/desactivap/{id_paciente}','cpacientes@desactivap')->name('desactivap');
Route::get('/restaurap/{id_paciente}','cpacientes@restaurap')->name('restaurap');
Route::get('/eliminap/{id_paciente}','cpacientes@eliminap')->name('eliminap');
Route::get('/modificap/{id_paciente}','cpacientes@modificap')->name('modificap');
Route::POST('/modificapaciente','cpacientes@modificapaciente')->name('modificapaciente');


////////////////////////////////////*Notas de Evolucion*////////////////////////////////////

Route::get('/notasevolucion','cnotas@principaln')->name('principaln');
Route::get('/altanot','cnotas@altanotas');
Route::POST('/guardanota','cnotas@guardanota')->name('guardanota');
/*Acciones*/
Route::get('/desactivan/{Id_Notas}','cnotas@desactivan')->name('desactivan');
Route::get('/restauran/{Id_Notas}','cnotas@restauran')->name('restauran');
Route::get('/eliminan/{Id_Notas}','cnotas@eliminan')->name('eliminan');
Route::get('/revisan/{Id_Notas}','cnotas@revisan')->name('revisan');


///////////////////////////////*Historia Clinica General*///////////////////////////////////

Route::get('/historiaclinicageneral','chistoriaclinicageneral@principalh')->name('principalh');
Route::get('/altahc','chistoriaclinicageneral@altahistoriac');
Route::POST('/guardahc','chistoriaclinicageneral@guardahc')->name('guardahc');
/*Acciones*/
Route::get('/desactivahc/{Id_HistoriaClinica}','chistoriaclinicageneral@desactivahc')->name('desactivahc');
Route::get('/restaurahc/{Id_HistoriaClinica}','chistoriaclinicageneral@restaurahc')->name('restaurahc');
Route::get('/eliminahc/{Id_HistoriaClinica}','chistoriaclinicageneral@eliminahc')->name('eliminahc');
Route::get('/revisahc/{Id_HistoriaClinica}','chistoriaclinicageneral@revisahc')->name('revisahc');


///////////////////////////////////////*Estudio de Gabinete*////////////////////////////


Route::get('/estudiogabinete','cestudiogabinete@principaleg')->name('principaleg');
Route::get('/altaeg','cestudiogabinete@altaestudiog');
Route::POST('/guardaeg','cestudiogabinete@guardaeg')->name('guardaeg');
/*Acciones*/
Route::get('/desactivaeg/{Id_EstudioGabinete}','cestudiogabinete@desactivaeg')->name('desactivaeg');
Route::get('/restauraeg/{Id_EstudioGabinete}','cestudiogabinete@restauraeg')->name('restauraeg');
Route::get('/eliminaeg/{Id_EstudioGabinete}','cestudiogabinete@eliminaeg')->name('eliminaeg');
Route::get('/revisaeg/{Id_EstudioGabinete}','cestudiogabinete@revisaeg')->name('revisaeg');

////////////////////////////////////////*Triage Obstetrico 08*/////////////////////////////////


Route::get('/triageobstetrico','ctriageobstetrico@principalto')->name('principalto');
Route::get('/altato','ctriageobstetrico@altatriageo');
Route::POST('/guardato','ctriageobstetrico@guardato')->name('guardato');

/*Acciones*/
Route::get('/desactivato/{Folio}','ctriageobstetrico@desactivato')->name('desactivato');
Route::get('/restaurato/{Folio}','ctriageobstetrico@restaurato')->name('restaurato');
Route::get('/eliminato/{Folio}','ctriageobstetrico@eliminato')->name('eliminato');
Route::get('/revisato/{Folio}','ctriageobstetrico@revisato')->name('revisato');

/////////////////////////////////////////*Triage Obstetrico 16*/////////////////////////////////

Route::get('/triageobstetrico16','ctriageobstetrico16@principalto16')->name('principalto16');
Route::get('/altato16','ctriageobstetrico16@altatriageo16');
Route::POST('/guardato16','ctriageobstetrico16@guardato16')->name('guardato16');

/*Acciones*/
Route::get('/desactivato16/{Folio}','ctriageobstetrico16@desactivato16')->name('desactivato16');
Route::get('/restaurato16/{Folio}','ctriageobstetrico16@restaurato16')->name('restaurato16');
Route::get('/eliminato16/{Folio}','ctriageobstetrico16@eliminato16')->name('eliminato16');
Route::get('/revisato16/{Folio}','ctriageobstetrico16@revisato16')->name('revisato16');


/*Guardar recetas y enfermedades*/
Route::POST('/guardamedicamento','crecetamedica@guardamedicamento')->name('guardamedicamento');
Route::POST('/guardaenfermedad','crecetamedica@guardaenfermedad')->name('guardaenfermedad');

//////////////////////////////////////*Consulta Urgencia*///////////////////////////////

Route::get('/consultaurgencia','cconsultaurgencia@principalcu')->name('principalcu');
Route::get('/altacu','cconsultaurgencia@altaconsultau');
Route::POST('/guardacu','cconsultaurgencia@guardacu')->name('guardacu');
Route::get('/altarecetas/{Id_expe}','crecetamedica@altarecetas')->name('altarecetas');
Route::POST('/enviaAviso','cusuarios@enviaAviso')->name('enviaAviso');

/*Acciones*/
Route::get('/desactivacu/{Id_ConsultaUrgencia}','cconsultaurgencia@desactivacu')->name('desactivacu');
Route::get('/restauracu/{Id_ConsultaUrgencia}','cconsultaurgencia@restauracu')->name('restauracu');
Route::get('/eliminacu/{Id_ConsultaUrgencia}','cconsultaurgencia@eliminacu')->name('eliminacu');
Route::get('/revisacu/{Id_ConsultaUrgencia}','cconsultaurgencia@revisacu')->name('revisacu');

Route::get('/ubicaciones/{id_expediente}','cexpedientes@ubicaciones')->name('ubicaciones');

//////////////////////////////////*Expedientes Digitales*/////////////////////////////////

Route::get('/urgencias','cexpedientes@principalexs')->name('principalexs');
Route::get('/expedientes','cexpedientes@principalex')->name('principalex');
Route::get('/altaex','cexpedientes@altaexpedientes');
Route::POST('/guardaexpediente','cexpedientes@guardaexpediente')->name('guardaexpediente');

/*Acciones*/
Route::get('/desactivaex/{id_expediente}','cexpedientes@desactivaex')->name('desactivaex');
Route::get('/restauraex/{id_expediente}','cexpedientes@restauraex')->name('restauraex');
Route::get('/eliminaex/{id_expediente}','cexpedientes@eliminaex')->name('eliminaex');
Route::get('/revisaex/{id_expediente}','cexpedientes@revisaex')->name('revisaex');

//////////////////////////////////*Hoja de Triage*//////////////////////////////////


Route::get('/hojatriage','chojatriage@principalht')->name('principalht');
Route::get('/altaht','chojatriage@altahojastriage');
Route::POST('/guardaht','chojatriage@guardaht')->name('guardaht');

/*Acciones*/
Route::get('/desactivaht/{Folio}','chojatriage@desactivaht')->name('desactivaht');
Route::get('/restauraht/{Folio}','chojatriage@restauraht')->name('restauraht');
Route::get('/eliminaht/{Folio}','chojatriage@eliminaht')->name('eliminaht');
Route::get('/revisaht/{Folio}','chojatriage@revisaht')->name('revisaht');



































//////////////////citas con expedientes//////////////////////








//la misma del menu la primer vista mis citas generales///
Route::get('/conexpedientes','controladorexpedientes@funcion1')->name('conexpedientes');

// la misma del menu la primer vista mis citas de hoy////
Route::get('/conexpedientes2','controladorexpedientes2@funcion1')->name('conexpedientes2');

//la misma del menu la primer vista mis citas generales///
Route::get('/conexpedientes3','controladorexpedientes3@funcion1')->name('conexpedientes3');

//////nueva consulta general de datos //////

Route::get('/citasdef', 'controladorexpedientes@funcion8')->name('datatable.citasdef');

//////nueva consulta de datos del dia actual //////

Route::get('/citasdef2', 'controladorexpedientes2@funcion8')->name('datatable.citasdef2');

//////nueva consulta general de datos //////

Route::get('/citasdef3', 'controladorexpedientes3@funcion8')->name('datatable.citasdef3');



///////////////eliminar citas con expediente/////
Route::get('/desactivarce/{id_cit}','controladorexpedientes@desactivarce')->name('desactivarce');


///////////////eliminar citas con expediente2/////
Route::get('/desactivarce2/{id_cit}','controladorexpedientes2@desactivarce2')->name('desactivarce2');

///////////////eliminar citas con expediente/////
Route::get('/desactivarce3/{id_cit}','controladorexpedientes3@desactivarce3')->name('desactivarce3');
////////////////////////////////////////////////
/*Route::get('/revisarm/{Id_receta}','crecetamedica@revisarm')->name('revisarm');*/
/////////////////////////////////////////////////

/////////////crear nueva cita con expediente/////
Route::get('/altacitaconex','controladorexpedientes@funcion3');

/////////////crear nueva cita con expediente/////
Route::get('/altacitaconex2','controladorexpedientes2@funcion3');

/////////////crear nueva cita con expediente/////
Route::get('/altacitaconex3','controladorexpedientes3@funcion3');

/////////////////////////////////////////////////

////////////guardar nueva cita con expediente////
Route::POST('/guardar_nueva_cita_con_ex','controladorexpedientes@funcion4')->name('guardarnuevacitaconex');

////////////guardar nueva cita con expediente2////
Route::POST('/guardar_nueva_cita_con_ex2','controladorexpedientes2@funcion4')->name('guardarnuevacitaconex2');

////////////guardar nueva cita con expediente////
Route::POST('/guardar_nueva_cita_con_ex3','controladorexpedientes3@funcion4')->name('guardarnuevacitaconex3');


///////////Modificar cita con expediente///////
Route::get('/modificarce/{id_cit}','controladorexpedientes@funcion5')->name('modificarce');

///////////Modificar cita con expediente2///////
Route::get('/modificarce2/{id_cit}','controladorexpedientes2@funcion5')->name('modificarce2');

///////////Modificar cita con expediente///////
Route::get('/modificarce3/{id_cit}','controladorexpedientes3@funcion5')->name('modificarce3');

///////Guardar modificacion de cita con expediente/////
Route::post('/guardar_modificacion_cita_con_expediente','controladorexpedientes@funcion6')->name('guardar_modificacion_cita_con_expediente');

///////Guardar modificacion de cita con expediente2/////
Route::post('/guardar_modificacion_cita_con_expediente2','controladorexpedientes2@funcion6')->name('guardar_modificacion_cita_con_expediente2');

///////Guardar modificacion de cita con expediente/////
Route::post('/guardar_modificacion_cita_con_expediente3','controladorexpedientes3@funcion6')->name('guardar_modificacion_cita_con_expediente3');


///////Resultado de busqueda id_expediente////////////
Route::name('/resultbusquedaidex')->get('/resultbusquedaidex','controladorexpedientes@funcion7');

///////Resultado de busqueda id_expediente////////////
Route::name('/resultbusquedaidex2')->get('/resultbusquedaidex2','controladorexpedientes2@funcion7');

///////Resultado de busqueda id_expediente////////////
Route::name('/resultbusquedaidex3')->get('/resultbusquedaidex3','controladorexpedientes3@funcion7');



///////Asignar cita al paciente con el click derecho //////
Route::get('/altacitaceclickder4/{id_cit}','controladorexpedientes4@altacitaconclickder')->name('altacitaceclickder4');


Route::post('/guardacitaconceclickder4','controladorexpedientes4@guardacitaconclickder')->name('guardacitaconceclickder4');

///////Asignar asistencia de la cita con el click derecho///
Route::get('/asigasistenciacitaceclickder4/{id_cit}','controladorexpedientes4@asigasistenciaconclickder')->name('asigasistenciacitaceclickder4');

////// Jalar datos del Modal(ventana emergente)///////
Route::post('/CitasModClickDer4/showTable','controladorexpedientes4@showTable')->name('CitasModClickDer4.showTable');

///// Jalar datos del Modal(ventana emergente)///////
Route::get('/modcitasclickder4', 'controladorexpedientes4@funcion8')->name('datatable.modcitasclickder4');

///////Modificar asistencia de la cita del paciente con el click derecho //////
Route::get('/modificarcitaceclickder4/{id_cit}','controladorexpedientes4@funcion9')->name('modificarcitaceclickder4');


///////Resultado de busqueda id_expediente modal////////////
Route::name('/resultbusquedaidexmodal')->get('/resultbusquedaidexmodal','controladorexpedientes@funcion9');

///////Guardar modificacion de asistencia de cita con expediente desde el modal/////
Route::post('/guardar_modificacion_cita_con_expediente_asis_modal','controladorexpedientes@funcion11')->name('guardar_modificacion_cita_con_expediente_asis_modal');









































//////////////////////////////////*Receta Medica*//////////////////////////////////

Route::get('/recetaIna', 'carchivo@obtenerRecetaIna')->name('datatable.recetas_medicasIna');
Route::get('/recetamedica','crecetamedica@principalrm')->name('recetamedica');
Route::get('/receta', 'carchivo@obtenerReceta')->name('datatable.recetas_medicas');
Route::get('/recetamedica','crecetamedica@principalrm')->name('recetamedica');
Route::get('/buscafrm', 'crecetamedica@buscaxfrm');
Route::name('/altarm')->get('/altarm','crecetamedica@altarecetasmedicas');
Route::POST('/guardarm','crecetamedica@guardarm')->name('guardarm');

/*CODIGO cantidad surtida*/
Route::name('/codigo')->get('/codigo','crecetamedica@medicamentos');
Route::name('/codigo1')->get('/codigo1','crecetamedica@medicamentos1');

/*Alta receta medica*/
Route::get('/buscafrm', 'crecetamedica@buscaxfrm')->name('buscafrm');
Route::get('/buscafrm', 'crecetamedica@buscaxfrm')->name('buscafrm');
Route::post('/buscafrm/fetch', 'crecetamedica@fetch')->name('buscafrm.fetch');
Route::post('/buscafrm/fetch1', 'crecetamedica@fetch1')->name('buscafrm.fetch1');
Route::post('/buscafrm/fetch2', 'crecetamedica@fetch2')->name('buscafrm.fetch2');
Route::post('/buscafrm/fetchCDG', 'crecetamedica@fetchCDG')->name('buscafrm.fetchCDG');

/*Acciones*/
Route::get('/desactivarm/{Id_receta}','crecetamedica@desactivarm')->name('desactivarm');
Route::get('/restaurarm/{Id_receta}','crecetamedica@restaurarm')->name('restaurarm');
Route::get('/eliminarm/{Id_receta}','crecetamedica@eliminarm')->name('eliminarm');
Route::get('/revisarm/{Id_receta}','crecetamedica@revisarm')->name('revisarm');


/*SIN EXPEDIENTES*/
Route::get('/recetaInaSin', 'carchivo@obtenerRecetaInaSin')->name('datatable.recetas_medicasInaSin');
Route::get('/recetaSin', 'carchivo@obtenerRecetaSin')->name('datatable.recetas_medicasSin');
Route::POST('/guardarSinExpediente','crecetamedica@guardarSinExpediente')->name('guardarSinExpediente');
Route::get('/desactivarmSin/{Id_receta}','crecetamedica@desactivarmSin')->name('desactivarmSin');
Route::get('/restaurarmSin/{Id_receta}','crecetamedica@restaurarmSin')->name('restaurarmSin');


//////////////////////////////////*Receta Medica Farmacia*//////////////////////////////////
Route::get('/recetamedicafarm','crecetamedica@principalrmf')->name('principalrmf');
Route::get('/modimotivo/{Id_receta}','crecetamedica@modimotivo')->name('modimotivo');
Route::POST('/modimotivo2','crecetamedica@modimotivo2')->name('modimotivo2');

/////////////////////////////////*Receta Poblacion*////////////////////////////////////////
Route::get('/recetapoblacion','crecetamedica@principalpoblacion')->name('recetapoblacion');Route::get('/recetapa','crecetamedica@altarecetasmedicaspa')->name('recetapa');

//////////////////////////////////*Consentimiento Informado *//////////////////////////////////

Route::get('/consentimientoinformado','cconsentimientoinformado@principalci')->name('principalci');
Route::get('/altaci','cconsentimientoinformado@altaconsentimientosinformados');
Route::POST('/guardaci','cconsentimientoinformado@guardaci')->name('guardaci');

/*Acciones*/
Route::get('/desactivaci/{Id_ConsentimientoInformado}','cconsentimientoinformado@desactivaci')->name('desactivaci');
Route::get('/restauraci/{Id_ConsentimientoInformado}','cconsentimientoinformado@restauraci')->name('restauraci');
Route::get('/eliminaci/{Id_ConsentimientoInformado}','cconsentimientoinformado@eliminaci')->name('eliminaci');
Route::get('/revisaci/{Id_ConsentimientoInformado}','cconsentimientoinformado@revisaci')->name('revisaci');


//////////////////////////////////* Solicitud de Laboratorio *//////////////////////////////////

Route::get('/solicitudlaboratorio','csolicitudlaboratorio@principalsl')->name('principalsl');
Route::get('/hojaII','csolicitudlaboratorio@hojaII')->name('hojaII');
Route::get('/altasl','csolicitudlaboratorio@altasolicitudeslaboratorios');
Route::POST('/guardasl','csolicitudlaboratorio@guardasl')->name('guardasl');

/*Acciones*/
Route::get('/desactivasl/{Id_Solicitud}','csolicitudlaboratorio@desactivasl')->name('desactivasl');
Route::get('/restaurasl/{Id_Solicitud}','csolicitudlaboratorio@restaurasl')->name('restaurasl');
Route::get('/eliminasl/{Id_Solicitud}','csolicitudlaboratorio@eliminasl')->name('eliminasl');
Route::get('/revisasl/{Id_Solicitud}','csolicitudlaboratorio@revisasl')->name('revisasl');



Route::get('/sistema_inicio', function () {
	
    return view('datatables.sistema_inicio');

});


Route::name('excel_inventario')->get('/excel_inventario','ExcelController@export');



////////////*Correo*/////////////7
Route::get('sendemail', function () {

    $data = array(
        'names' => "Curso Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('al221410529@gmail.com', 'Hospital Xoncacatlan');

        $message->to('al221511455@gmail.com')->subject('test emailsss');

    });

    return "Tú email ha sido enviado correctamente";

});



//////////////nueva ruta////

Route::resource('inventarios','MinventarioController');


Route::post('/inventarios/showTable','MinventarioController@showTable')->name('inventarios.showTable');
//tb
Route::resource('tb','tbcontroller');
Route::get('/tb_cie10', 'tbcontroller@obtenert')->name('datatable.tb_cie10');

Route::post('/tb/showTable','tbcontroller@showTable')->name('tb.showTable');
/////////////////////////////////TB1/////
Route::resource('tb1','tb1controller');


Route::post('/tb1/showTable','tb1controller@showTable')->name('tb1.showTable');

//Route::get('excel_inventario', 'ExcelController@Excel_Sofertas')->name('Excel_Sofertas');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////	NUESTRA PARTE RUTAS ////////////////////////////////////////////////////////////////////////////////////////
/*BUSQUEDA ARCHIVO 02-Febrero-2019*/
Route::get('/principalconsultas','carchivo@principalconsulta')->name('principalconsulta');

/*Busqueda expediente 02-feb-2019*/
Route::name('busquedaArc')->get('/busquedaArc', 'carchivo@busquedaArc');

/*PRESTAMO EXPEDIENTE 09-feb-2019*/
Route::get('/prestamo','carchivo@prestamoexpediente')->name('prestamos');

/*GUARDA PRESTAMO EXPEDIENTE 09-feb-2019*/
Route::POST('/guardaprestamoexpediente','carchivo@guardapresexp')->name('guardaprestamoexpediente');

/*MODIFICACION PRESTAMO EXPEDIENTE 09-feb-2019*/
Route::get('/prestamo/{id_expediente}','carchivo@prestamoexpediente')->name('prestamos');

/*DETALLE EXPEDIENTE 09-feb-2019*/
Route::get('/detalleexp/{id_expediente}','carchivo@detalleexp')->name('detalleexp');

/*Historial expediente 10-feb-2019*/
Route::name('hisexped')->get('/hisexp', 'carchivo@hisexped');

//---------------------------------<CITAS>---------------------------------------
/*ALTA CITAS 13-FEB-2019*/
Route::get('/altacita/{id_expediente}','ccitas@agencitas')->name('altacitas');

/*GUARDA CITAS 13-FEB-2019*/
Route::POST('/guardacita1','ccitas@guardacita')->name('guardacita1');

/*BUSQUEDA DE CITAS 13-FEB-2019*/
Route::get('/buscacitas','ccitas@buscacita')->name('buscacitas');
Route::POST('/resulbusqueda','ccitas@resultadobusqueda')->name('resulbusqueda');

/*ALTA POBLACION ABIERTA 20-FEB-2019*/
Route::get('/altapobab','cpoblaciones_abiertas@altaspa')->name('altapobab');

/*GUARDA POBLACION ABIERTA 20-FEB-2019*/
Route::POST('/guardapob','cpoblaciones_abiertas@guardapob')->name('guardapob');

/*FORMULARIO CITA POBLACION ABIERTA 26-FEB-2019*/
Route::get('/formaltacitapobab/{id_pob_abie}','cpoblaciones_abiertas@formaltacitapobab')->name('formaltacitapobab');

/*ALTA CITAS POB ABIERTA 23-FEB-2019*/
Route::post('/gcitapobabi','cpoblaciones_abiertas@gucipobabi')->name('gcitapobabi');

Route::get('/reporte','cpoblaciones_abiertas@reportecpoblacion')->name('reporte');
/*REPORTE POB ABIERTA 23-FEB-2019*/

/*BUSQUEDA POBLACIONABIERTA 23-feb-2019*/
Route::name('busquedaPob')->get('/busquedaPob', 'cpoblaciones_abiertas@busquedaPob');

/*DETALLE POBLACION ABIERTA 24-feb-2019*/
Route::get('/detallespobabi/{id_pob_abie}','cpoblaciones_abiertas@detallespobabi')->name('detallespobabi');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////



//NUEVO PAGINADO TABLAS CON DATATABLES LARAVEL YAJRA 24-FEB-2019 //////////////////////////////////////////

Route::get('/expedd', 'carchivo@prin');
 
Route::get('/exxpedientes', 'carchivo@obtenerExpedientes')->name('datatable.expedientes');

/*Busqueda expediente inactivos 02-mar-2019*/
Route::name('busquedaIna')->get('/busquedaIna', 'carchivo@busquedaIna');

/* BUSQUEDA INACTIVOS EXPEDIENTES CON DATATABLES 17/03/2019*/

Route::get('/exxpedientesIna', 'carchivo@obtenerExpedientesIna')->name('datatable.expedientesIna');

//////////////////*******************************************************////////////////////////////////
/*Modifica Familiar 05-ABRIL-2019*/
Route::get('/modificafamiliar/{id_expediente}','cNucleoFamiliar@modificafamiliar')->name('modificafamiliar');
Route::POST('/modfamiliar','cNucleoFamiliar@revisafamilia')->name('modfamiliar');

/*Alta FAMILIAR NUCLEO*/
Route::get('/nvfamiliar/{id_expediente}','cNucleoFamiliar@nuevofamiliar')->name('nvfamiliar');
Route::POST('/nvaltafamiliar','cNucleoFamiliar@registrafamiliar')->name('nvaltafamiliar');





//////MODIFICACION EXPEDIENTE///
Route::get('/modifica/{id_expediente}','carchivo@modifi')->name('modifica');
Route::post('/guardamodifica','carchivo@guardamodifica')->name('guardamodifica');


Route::post('/guardamodifi','carchivo@guardamodifi')->name('guardamodifi');

/* BUSQUEDA CITAS CON EXPEDIENTES CON DATATABLES 9/04/2019*/

Route::post('/citas/showTable','ccitas@showTable')->name('citas.showTable');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('citas','CitasController');
Route::post('/citas/showTable','CitasController@showTable')->name('citas.showTable');

//BUSQUEDA CITAS POBLACION ABIERTA CON DATATABLES LARAVEL 20-MARZO-2019 //////////////////////////////////////////

Route::get('/cpobabi', 'cpoblaciones_abiertas@prin');
Route::get('/citaspobabie', 'cpoblaciones_abiertas@obtenercitasPoblacionabierta')->name('datatable.citaspobabie');

Route::get('/eliminacitapobabie/{id_citapobabi}','cpoblaciones_abiertas@eliminacita')->name('eliminacitapobabie');



////////////////////////////////////////////////////////////////////////////////////////
//////////////////////      ESTADIAS   //////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////



//////////////////////// VISTA DE ALTA USUARIO///////
Route::GET('alta','cusuarios@alta')->name('altadeusuario');

/////////// RECUPERACION DE CONTRASEÑA ///
/////////////////////////////////////////////////////////////////////////


 Route::GET('correo','cusuarios@email')->name('correo');

 Route::POST('/guardaemail','cusuarios@guardaemail')->name('guardaemail');
 Route::get('enviar','cusuarios@enviar_email');
 

 ////////////////////////////prestamo///////////////////////////////////////////////

 Route::get('/prestamo','carchivo@prestamo')->name('prestamo');
 ///////////////////////////////////////////////////////////////////////////
/////////////////////  CAMBIO DE CONTRASEÑA ////////////////////////////////
 Route::GET('password','login@cambiodecontraseña')->name('password');

 Route::POST('/guardacontraseña','login@guardacambiodecontraseña')->name('guardacontraseña');


 ///////////////////////////////////////////////////////////////////////////
 /////////////////////////USUARIOS ARCHIVO//////////////////////////////////
Route::get('/altausu2','cusuarios@altausuarios2');
Route::POST('/guardausuario2','cusuarios@guardausuario2')->name('guardausuario2');


Route::get('/desactivau2/{id_usuario}','cusuarios@desactivau2')->name('desactivau2');
Route::get('/restaurau2/{id_usuario}','cusuarios@restaurau2')->name('restaurau2');

Route::get('/modificau2/{id_usuario}','cusuarios@modificau2')->name('modificau2');//vista

Route::POST('/modificausuario2','cusuarios@modificausuario2')->name('modificausuario2');//mandar a la base

Route::get('/mod2','cusuarios@modu2');
  ///////////////////////////////////////////////////////////////////////////
 ///////////////////////////////////////////////////////////////////////////












