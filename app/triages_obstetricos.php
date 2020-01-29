<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class triages_obstetricos extends Model
{
  use SoftDeletes;
   protected $primaryKey = 'Folio';
   
   protected $fillable=['Folio','Fecha_Elaboracion','Hora_Elaboracion',
   'Nombre','Apellido_P','Apellido_M','Edad','Genero',
   'T_A','Frec_C','Frec_R','Temp',
			'EdoC','HemorragiaT','CrisisC',
			'SintomasV','Dolor','SalidaL',
			'ActividadU','MovimientosF','EdadG',
			'Id_Unidad','Id_Trabajador'];		 
  protected $date=['deleted_at']; 
}
