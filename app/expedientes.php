<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class expedientes extends Model
{
	use SoftDeletes;
   protected $primaryKey = 'id_expediente';
   
   protected $fillable=['id_expediente','ubicacion','id_paciente','id_unidad', 'parentesco'];
	protected $date=['deleted_at']; 
}
