<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctores extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_doc';
	protected $fillable=['id_doc','nom_doc','ap_doc','am_doc','edad','turno','hora_entrada','hora_salida','num_cedula'];
	protected $date=['deleted_at'];
}
