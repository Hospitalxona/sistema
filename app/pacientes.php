<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class pacientes extends Model
{
use SoftDeletes;
   protected $primaryKey = 'id_paciente';
   
   protected $fillable=['id_paciente','nom_paciente','ap_paciente','am_paciente',
						'curp','edad','fecha_nacimiento','entidad_nacimiento',
						'sexo','afiliacion_seguro','num_afiliacion','nom_vialidad',
						'tipo_vialidad','num_int','num_ext','nombre_asentamiento',
						'tipo_asentamiento','cp','localidad','telefono','ExpedienteD','id_municipio'];
	protected $date=['deleted_at']; 
}
