<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class estudios_gabinetes extends Model
{
 use SoftDeletes;
   protected $primaryKey = 'Id_EstudioGabinete';
   
   protected $fillable=['Id_EstudioGabinete','Fecha_Elaboracion','Hora_Elaboracion',
   'De','Servicio','Cama','Paciente',
   'Nombre','Apellido_P','Apellido_M','Edad','Genero',
			'Datos_clinicos','Diagnostico','Estudios_solicitados',
			'Fechapc','Observaciones','Placa',
			'Clave','Interpretacion','Fecha_Interpretacion','Observaciones2',
			'Id_Unidad','Id_Expediente','Id_Trabajador'];		 
  protected $date=['deleted_at']; 
}
