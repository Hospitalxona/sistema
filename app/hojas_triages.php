<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class hojas_triages extends Model
{
 use SoftDeletes;
   protected $primaryKey = 'Folio';
   protected $fillable=['Folio','Fecha_Elaboracion','Hora_Elaboracion',
   'Nombre','Apellido_P','Apellido_M','Edad','Genero',
   'Frec_C','Frec_R','T_A','Temp',
	'Antecedentes','Otro','Urgencia_I','Urgencia_C','Urgencia_S',
	'Id_Unidad','Id_Trabajador'];		 
  protected $date=['deleted_at']; 
}
