<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class poblaciones_abiertas extends Model
{
   	use SoftDeletes;
   	protected $primaryKey = 'id_pob_abie';
   
   	protected $fillable=['id_pob_abie','nom_paciente','ap_paciente','am_paciente',
						'curp','edad','fecha_nacimiento','sexo','nom_vialidad',
						'tipo_vialidad','num_int','num_ext','nombre_asentamiento',
						'tipo_asentamiento','cp','localidad','telefono','id_municipio','id_estado'];
	protected $date=['deleted_at'];
}