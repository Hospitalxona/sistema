<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class triages16_obstetricos extends Model
{
use SoftDeletes;
   protected $primaryKey = 'Folio';
   
   protected $fillable=['Folio','Nombre','Apellido_P','Apellido_M',
   'Fecha_Elaboracion','Fecha_n','Hora_Elaboracion','Hora_F','Codigo',
   'v1','v2','v3','v4','v5',
   'v6','v7','v8','v9','v10',
   'v11','v12','v13','v14','v15',
   'v16','v17','v18','v19','v20',
   'v21','v22','Id_unidad','Id_trabajador'];		 
  protected $date=['deleted_at']; 
}
