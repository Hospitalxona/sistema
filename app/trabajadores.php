<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class trabajadores extends Model
{
	   use SoftDeletes;
   protected $primaryKey = 'id_trabajador';
   
   protected $fillable=['id_trabajador','nombre_tra','ap_tra',
						'am_tra','sexo','cedula_profesional',
						'turno','dias_laborales','hr_entrada',
						'hr_salida','especialidad','escolaridad',
						'telefono','email','estatus','rfc',
						'area','Usuario','id_unidad'];
	protected $date=['deleted_at']; 
}
