<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class solicitudes_laboratorios extends Model
{
use SoftDeletes;
   protected $primaryKey = 'Id_Solicitud';
   
   protected $fillable=['Id_Solicitud','NoRecibo','Fecha_Elaboracion',
   'Nombre','Apellido_P','Apellido_M',
   'Edad','Genero','NumeroA',
   'Servicio','Cama','Diagnostico','Fecha_PC','Hematologia',
   'Anormalidades','QuimicaS','NombreQ','Perfil',
   'Id_unidad','Id_trabajador','Id_expediente'];		 
  protected $date=['deleted_at']; 
}
