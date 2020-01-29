<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class consentimientos_informados extends Model
{
use SoftDeletes;
protected $primaryKey = 'Id_ConsentimientoInformado';
   
   protected $fillable=['Id_ConsentimientoInformado','Lugar',
   'Fecha_Elaboracion','Hora_Elaboracion',
   'Nombre','Apellido_P','Apellido_M',
   'Edad','Genero','Ocupacion','Edo_Civil',		
   'Calle','nint','n_ext','Colonia','Localidad','Municipio','Estado',
   'Servicio',
   'Linea1','Linea2','Linea3','Linea4','Linea5','Linea6','Linea7',
   'Linea8','Linea9','Linea10','Linea11','Linea12',
   'Testigo1','Testigo2',
   'Id_expediente','Id_unidad','Id_trabajador'];		 
  protected $date=['deleted_at'];
}
