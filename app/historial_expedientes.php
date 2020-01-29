<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class historial_expedientes extends Model
{
    use SoftDeletes;
   	protected $primaryKey = 'id_his';
   	protected $fillable=['id_his','id_expediente','id_trabajador','id_area','created_at'];
  	protected $date=['deleted_at'];
}