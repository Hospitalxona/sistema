<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class recetas_medicas extends Model
{
 use SoftDeletes;
   protected $primaryKey = 'Id_receta';
   
   protected $fillable=['Id_receta','Folio','ordinariamedicamentoscontrolados','Area','Clave_servicio',
   'Nom_servicio','No_licencia','Cobertura','Fecha_Elaboracion','No_Afiliacion',
   'Nombre','Apellido_P','Apellido_M',
   'Clave_M','Nombre_M','Clave_Diagnostico','Dosis','Duracion','Cantidad_solicitada','Cantidad_surtida','motivo',
   'Edad','Genero',
   'Clave_M2','Nombre_M2','Clave_Diagnostico2','Dosis2','Duracion2','Cantidad_solicitada2','Cantidad_surtida2','motivo2',
   'Clave_M3','Nombre_M3','Clave_Diagnostico3','Dosis3','Duracion3','Cantidad_solicitada3','Cantidad_surtida3','motivo3', 
   'Ent_cajas','Recibi_cajas','Fecha_recibido',
   'Id_Unidad','Id_Expediente','Id_Trabajador'];		 
  protected $date=['deleted_at'];
}
