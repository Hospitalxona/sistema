<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class citas_pobabiertas extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_citapobabi';
   	protected $fillable=['id_citapobabi','nom_paciente','ap_paciente','am_paciente','fecha','hora','area_med','num_consul','doctor'];		 
  	protected $date=['deleted_at'];
}
